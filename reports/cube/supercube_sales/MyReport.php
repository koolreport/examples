<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\processes\Limit;
use \koolreport\processes\Sort;
use \koolreport\processes\Map;
use \koolreport\cube\processes\Cube;
use \koolreport\cube\processes\SuperCube;
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
                $row['Year'] = $row['orderYear'];
                $row['Quarter'] = $row['orderQuarter'];
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
        )));
        
        //multi row fields
        $node->pipe(new SuperCube(array(
            "rows" => "productLine, productName",
            "sum" => "dollar_sales",
        )))
        ->pipe(new Sort(array(
            '{{all}} - {{all}} | dollar_sales - sum' => 'desc',
        )))
        ->pipe(new Limit(array(
            5, 0
        )))
        ->pipe($this->dataStore('salesCategoryProduct'));

        //multi column fields
        $node->pipe(new SuperCube(array(
            "columns" => "Year, Quarter",
            "sum" => "dollar_sales",
        )))
        ->pipe(new Sort(array(
            'orderYear - {{all}} | dollar_sales - sum' => 'desc',
        )))
        ->pipe(new Limit(array(
            5, 0
        )))
        ->pipe($this->dataStore('salesYearQuarter'));

        //multi aggregated fields
        $node->pipe(new SuperCube(array(
            "rows" => "customerName",
            // "columns" => "Year",
            "sum" => "dollar_sales",
            "count" => "dollar_sales",
            "avg" => "dollar_sales",
            'sum percent' => 'dollar_sales',
        )))
        ->pipe(new Sort(array(
            '{{all}} - {{all}} | dollar_sales - sum' => 'desc',
        )))
        ->pipe(new Limit(array(
            5, 0
        )))
        ->pipe($this->dataStore('salesCustomerYear'));
    }
}