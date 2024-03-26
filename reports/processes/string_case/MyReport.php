<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\StringCase;

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
                        array("name","income"),
                        array("John wick",50000),
                        array("Marry poppins",60000),
                        array("Peter pan",100000),
                        array("Donald duck",80000),
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
        ->pipe(new StringCase(array(
            "all-cap" => "name",
            // "upper" => "name, address",
            // "lower" => "name, address",
            // "first-cap" => "name, address",
            // "all-cap" => "name, address"
        )))
        ->pipe($this->dataStore("result"));
    }
}