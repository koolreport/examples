<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Filter;

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "data"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "dataFormat"=>"table",
                    "data"=>array(
                        array("name","joined_date"),
                        array("John","2018-08-01 01:34:12"),
                        array("Marry","2018-09-12 10:22:44"),
                        array("Peter","2018-09-03 13:44:14"),
                        array("Donald","2018-09-26 17:27:54"),
                    )
                )
            )
        );
    }
    protected function setup()
    {
        //Prepare data
        $this->src("data")
        ->pipe($this->dataStore("origin"));
        
        //Pipe through process to get result
        $this->src("data")
        ->pipe(new ColumnMeta(array(
            "joined_date" => array(
                "type" => "datetime",
                "format" => "Y-m-d H:i:s",
                "displayFormat" => "d-m-Y"
            )
        )))
        ->pipe($this->dataStore("result"));
    }
}