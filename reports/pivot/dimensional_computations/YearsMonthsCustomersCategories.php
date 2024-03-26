<?php
require_once "../../../load.koolreport.php";
use \koolreport\processes\Filter;
use \koolreport\processes\ColumnMeta;
use \koolreport\pivot\processes\Pivot;

class YearsMonthsCustomersCategories extends koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources" => array(
                "dollarsales"=>array(
                    'filePath' => '../../../databases/customer_product_dollarsales2.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"      
                ), 
            )
        );
    }
    function setup()
    {
        $node = $this->src('dollarsales');
        
        $node->pipe(new Filter(array(
            array('customerName', '<', 'B'),
            array('orderYear', '<', 2005)
        )))
        ->pipe(new ColumnMeta(array(
            "dollar_sales"=>array(
                'type' => 'number',
                "prefix" => "$",
            ),
        )))
        ->pipe(new Pivot(array(
            "dimensions"=>array(
                "column"=>[
                    "orderYear" => [
                        "computations" => [
                            "yearlyDifference" => "{2004} - {2003}",
                            "yearlyDifference" => function($aggRow, $measure) {
                                return ($aggRow['2004'] ?? 0) - ($aggRow['2003'] ?? 0);
                            },
                        ],
                    ],
                    "orderMonth" => [
                        "computations" => [
                            "halfYearDifference" => "{12} + {11} + {10} + {9} + {8} + {7} - {1} - {2} - {3} - {4} - {5} - {6}",
                            "halfYearDifference" => function($aggRow, $measure) {
                                $result = 0;
                                $firstHalf = [1, 2, 3, 4, 5, 6];
                                $secondHalf = [7, 8, 9, 10, 11, 12];
                                foreach ($firstHalf as $month) $result -= $aggRow[$month] ?? 0;
                                foreach ($secondHalf as $month) $result += $aggRow[$month] ?? 0;
                                return $result;
                            }
                        ]
                    ],
                ],
                "row"=>"customerName, productLine",
            ),
            "aggregates"=>array(
                "sum"=>"dollar_sales",
                // "count"=>"dollar_sales",
            ),
        )))
        ->pipe($this->dataStore('sales'));  
    }
}
