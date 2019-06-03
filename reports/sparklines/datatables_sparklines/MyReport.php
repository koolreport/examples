<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\cube\processes\Cube;
use \koolreport\processes\Map;
use \koolreport\processes\Limit;
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
    protected function setup()
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

        ->pipe(new Cube(array(
            "rows" => "customerName",
            "column" => "orderQuarter",
            "sum" => "dollar_sales",
            "sum percent" => "dollar_sales",
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
        
        ->pipe(new Limit(array(
            5, 0
        )))
        ->pipe($this->dataStore('salesQuarterCustomer'));
    }
}