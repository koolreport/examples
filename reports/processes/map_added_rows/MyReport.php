<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Limit;
use \koolreport\processes\Sort;
use \koolreport\processes\RemoveColumn;
use \koolreport\processes\OnlyColumn;
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
        ->pipe(new Limit(array(5, 0)));

        $node
        ->pipe($this->dataStore('origin'));
        
        $node
        ->pipe(new Map(array(
            '{end}' => function($count) {
                $addedRows = [
                    ['productName' => 'Number of products: ', 'dollar_sales' => $count],
                    ['productName' => 'Total sales: ', 'dollar_sales' => 'Unknown amount'],

                ];
                return $addedRows;
            }
        )))
        ->pipe($this->dataStore('result'));

    }
}