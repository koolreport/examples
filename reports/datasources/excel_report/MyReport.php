<?php

require_once "../../../load.koolreport.php";

use \koolreport\excel\ExcelDataSource;
use \koolreport\processes\Group;
use \koolreport\processes\Sort;
use \koolreport\processes\ColumnMeta;

class MyReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "excel"=>array(
                    "class"=>ExcelDataSource::class,
                    "filePath"=>dirname(__FILE__)."/../../../databases/customer_product_dollarsales2.xlsx",
                )
            )
        );
    }
    protected function setup()
    {
        $this->src("excel")
        ->pipe(new Group(array(
            "by"=>"orderMonth",
            "sum"=>"dollar_sales",
        )))
        ->pipe(new Sort(array(
            "orderMonth"=>"asc",
        )))
        ->pipe(new ColumnMeta(array(
            "orderMonth"=>array(
                "type"=>"date",
                "format"=>"n",
                "displayFormat"=>"M"
            ),
            "dollar_sales"=>array(
                "prefix"=>'$'
            )
        )))        
        ->pipe($this->dataStore("data"));
    }
}