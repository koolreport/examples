<?php
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\DateTimeFormat;
use \koolreport\processes\CopyColumn;
use \koolreport\processes\Group;

class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources" => array(
                "payments"=>array(
                    'filePath' => dirname(__FILE__).'/../../../databases/payments.csv',
                    'class' => "\koolreport\datasources\CSVDataSource"      
                ), 
            )
        );
    }
    function setup()
    {
        $this->src("payments")
        ->pipe(new ColumnMeta(array(
            "paymentDate"=>array(
                "type"=>"date",
                "format"=>"Y-m-d"
            ),
            "amount"=>array(
                "type"=>'number'
            )
        )))
        ->pipe(new CopyColumn(array(
            "year"=>"paymentDate",
            "month"=>"paymentDate",
        )))
        ->pipe(new DateTimeFormat(array(
            "year"=>"Y",
            "month"=>"F, Y"
        )))
        ->pipe(new Group(array(
            "by"=>"month",
            "sum"=>"amount"
        )))
        ->pipe($this->dataStore("payments"));
    }
}