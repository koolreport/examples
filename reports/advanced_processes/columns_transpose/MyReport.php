<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Limit;
use \koolreport\processes\Sort;
use \koolreport\processes\RemoveColumn;
use \koolreport\processes\Transpose2;
use \koolreport\processes\Map;
use \koolreport\cube\processes\Cube;
use \koolreport\core\Utility as Util;

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
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
        $node = $this->src('dollarsales')
        ->pipe(new Map(array(
            '{value}' => function($row, $metaData) {
                $row['orderQuarter'] = 'Q ' . $row['orderQuarter'];
                return array($row);
            },
            '{meta}' => function($metaData) {
                $metaData['columns']['dollar_sales'] = array(
                    'type' => 'number',
                    "prefix" => "$",
                );
                $metaData['columns']['orderQuarter'] = array(
                    'type' => 'string',
                );
                return $metaData;
            },
        )))
        ;

        $node->pipe(new Cube(array(
            "row" => "customerName",
            "column" => "orderQuarter",
            "sum" => "dollar_sales",
        )))
        
        ->pipe(new Map(array(
            '{value}' => function($row, $meta) {
                $row['H 1'] = Util::get($row, 'Q 1', 0) + Util::get($row, 'Q 2', 0);
                $row['H 2'] = Util::get($row, 'Q 3', 0) + Util::get($row, 'Q 4', 0);
                return $row;
            },
            '{meta}' => function($meta) {
                $cMetas = & $meta['columns'];
                $cMetas['Q 1']['type'] = 'number';
                $cMetas['Q 1']['decimals'] = 2;
                return $meta;
            }
        )))
        ->pipe(new Sort(array(
            '{{all}}' => 'desc'
        )))
        ->pipe(new Limit(array(
            5, 0
        )))
        ->pipe(new ColumnMeta(array(
            "{{all}}"=>array(
                "label"=>"Total",
            ),
            "customerName"=>array(
                "label"=>"Customer",
            ),
        )))
        ->pipe(new RemoveColumn(array(
            "{{all}}", 'H 1', 'H 2'
        )))
        ->saveTo($node2);
        
        $node2->pipe($this->dataStore('salesQuarterCustomer'));
        
        $node2->pipe(new Transpose2())
        ->saveTo($node3);

        $node3->pipe($this->dataStore('salesCustomerQuarter'));

        $node3->pipe(new Map(array(
            '{value}' => function($row, $meta, $index) {
                $sum = 0;
                foreach ($row as $v)
                    $sum += is_numeric($v) ? $v : 0;
                $row['Total'] = $sum;
                return $row;
            }
        )))->pipe($this->dataStore('salesCustomerQuarterAll'));

    }
}