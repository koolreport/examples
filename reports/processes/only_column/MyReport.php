<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\OnlyColumn;

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
                        array("name","income","age"),
                        array("John",50000,25),
                        array("Marry",60000,30),
                        array("Peter",100000,45),
                        array("Donald",80000,40),
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
        ->pipe(new OnlyColumn(array(
            "age", "income"
        )))
        ->pipe($this->dataStore("result"));
    }
}