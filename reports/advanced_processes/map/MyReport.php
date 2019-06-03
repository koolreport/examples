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
        ->pipe(new OnlyColumn([
            'productName', 'orderYear', 'orderQuarter', 'dollar_sales'
        ]))
        ->pipe(new Limit(array(
            5, 0
        )))
        ;

        $node->pipe($this->dataStore('salesProduct'));
        
        $node
        ->pipe(new Map(array(
            '{value}' => function($row, $metaData) {
                $row['orderQuarter'] = 'Q ' . $row['orderQuarter'];
                return array($row);
            },
            '{meta}' => function($metaData) {
                $metaData['columns']['productName'] = array(
                    'label' => 'Products',
                );
                $metaData['columns']['orderYear'] = array(
                    'label' => 'Year',
                    'type' => 'string',
                );
                $metaData['columns']['orderQuarter'] = array(
                    'label' => 'Quarter',
                    'type' => 'string',
                );
                $metaData['columns']['dollar_sales'] = array(
                    'label' => 'Sales',
                    'type' => 'number',
                    "prefix" => "$",
                );
                return $metaData;
            },
        )))
        ->saveTo($node2);

        $node2->pipe($this->dataStore('salesProductMap'));

        $node2->pipe(new RemoveColumn(array(
            "orderYear", 'orderQuarter'
        )))
        ->pipe($this->dataStore('salesProductChart'));

    }
}