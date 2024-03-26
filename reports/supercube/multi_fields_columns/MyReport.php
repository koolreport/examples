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
        ->pipe(new \koolreport\processes\Custom(function($row){
            $row["orderQuarter"] = "Q" . $row["orderQuarter"];
            return $row;
        }));

        $node
        ->pipe($this->dataStore('origin'));
        
        //multi column fields
        $node->pipe(new SuperCube(array(
            "columns" => "orderYear, orderQuarter",
            "sum" => "dollar_sales",
        )))
        ->pipe($this->dataStore('result'));
    }
}