<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\JsonSpread;

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
                        array("nameIncomeJson"),
                        array('{"name": "John","income": 50000}'),
                        array('{"name": "Marry","income": 60000}'),
                        array('{"name": "Peter","income": 100000}'),
                        array('{"name": "Donald","income": 80000}'),
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
        ->pipe(new JsonSpread(array(
            "nameIncomeJson"
        )))
        ->pipe($this->dataStore("result"));
    }
}