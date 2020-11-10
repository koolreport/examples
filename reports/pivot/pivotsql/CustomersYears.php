<?php
require_once "../../../load.koolreport.php";
use \koolreport\processes\ColumnMeta;

class CustomersYears extends koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources" => array(
                "automaker"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=automaker",
                    "username"=>"root",
                    'password' => '',
                    "charset"=>"utf8"
                ),
            )
        );
    }
    function setup()
    {
        $this->src('automaker')
        ->query('select * from customer_product_dollarsales2')
        ->pipe(new \koolreport\pivot\processes\PivotSQL([
            "column" => "orderYear",
            "row" => "customerName",
            "aggregates"=>array(
                "sum"=>"dollar_sales",
            ),
        ]))
        ->pipe(new ColumnMeta(array(
            "dollar_sales - sum"=>array(
                'type' => 'number',
                "prefix" => "$",
            ),
        )))
        ->pipe($this->dataStore('pivotData'));

    }
}
