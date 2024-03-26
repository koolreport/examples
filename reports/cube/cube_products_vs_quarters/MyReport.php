<?php
require_once "../../../load.koolreport.php";
use \koolreport\cube\processes\Cube;

class MyReport extends koolreport\KoolReport
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
        
        $node
        ->pipe(new Cube(array(
            "row" => "productName",
            "column" => "orderQuarter",
            "sum" => "dollar_sales"
        )))
        ->pipe($this->dataStore('result'));
        
    }
}
