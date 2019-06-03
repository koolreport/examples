<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\NumberBucket;
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
                        array("name","charity"),
                        array("John",5),
                        array("Marry",13),
                        array("Peter",15),
                        array("David",10),
                        array("Jane",20),
                        array("Donald",50),
                        array("Them",60),
                        array("Smith",10),
                        array("Johny",17),
                        array("Michael",90),
                        array("Jolie",65),
                        array("Bradpit",45),
                        array("Eddie",35),
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
            "charity"=>array(
                "type"=>"number",
                "prefix"=>"$"
            )
        )))
        ->saveTo($source);

        //Save orginal data
        $source->pipe($this->dataStore("origin"));
        
        //Pipe through process to get result
        $source->pipe(new NumberBucket(array(
            "charity"=>array(
                "step"=>20,
                "prefix"=>"$"
            )
        )))->saveTo($result)
        ->pipe($this->dataStore("result"));
    
        $result->pipe(new Group(array(
            "by"=>"charity",
            "count"=>"count"
        )))
        ->pipe($this->dataStore("result_further"));
    }
}