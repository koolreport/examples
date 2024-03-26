<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use koolreport\processes\StringTrim;

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
                        array("N_John",50000),
                        array("N_Marry",60000),
                        array("N_Peter",100000),
                        array("N_Donald",80000),
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
        ->pipe(new StringTrim(array(
            "name",
            "character_mask" => "\t\n\rN_"
        )))
        ->pipe($this->dataStore("result"));
    }
}