<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;

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
                        array("orderDate","amount"),
                        array("2018-10-01",100),
                        array("2018-10-12",300),
                        array("2018-10-23",200),
                        array("2018-10-28",100),
                        array("2018-11-03",300),
                        array("2018-11-14",300),
                        array("2018-11-16",400),
                        array("2018-11-25",500),
                        array("2018-12-03",200),
                        array("2018-12-14",100),
                        array("2018-12-17",200),
                        array("2018-12-23",400),
                    )
                )
            )
        );
    }
    protected function setup()
    {
        //Prepare data
        $this->src("data")
        ->pipe(new ColumnMeta(array(
            "income"=>array(
                "type"=>"number",
                "prefix"=>"$"
            )
        )))
        ->saveTo($source);

        //Save orginal data
        $source->pipe($this->dataStore("origin"));
        
        //Pipe through process to get result
        $source->pipe(new TimeBucket(array(
            "orderDate"=>"month"
        )))->saveTo($result)
        ->pipe($this->dataStore("result"));
    
        $result->pipe(new Group(array(
            "by"=>"orderDate",
            "sum"=>"amount"
        )))
        ->pipe($this->dataStore("result_further"));
    }
}