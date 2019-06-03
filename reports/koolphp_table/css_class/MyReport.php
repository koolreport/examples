<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

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
                        array("name","age","income"),
                        array("John",26,50000),
                        array("Marry",29,60000),
                        array("Peter",34,100000),
                        array("Donald",28,80000),
                    )
                )
            )
        );
    }
    protected function setup()
    {
        $this->src("data")
        ->pipe($this->dataStore("data"));
    }    
}