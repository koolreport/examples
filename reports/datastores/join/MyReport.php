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
                "first"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "dataFormat"=>"table",
                    "data"=>array(
                        array("first_id","name"),
                        array("key_1","John"),
                        // array("key_2","Marry"),
                        array("key_3","Peter"),
                        // array("key_4","Donald"),
                        array("key_5","May"),
                    )
                ),
                "second"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "dataFormat"=>"table",
                    "data"=>array(
                        array("second_id","income"),
                        array("key_1",50000),
                        array("key_2",60000),
                        // array("key_3",100000),
                        array("key_4",80000),
                        array("key_5",90000),
                    )
                ),
            )
        );
    }
    protected function setup()
    {
        //Prepare data

        $this->src("first")
        ->pipe($this->dataStore("first"));

        $this->src("second")
        ->pipe(new ColumnMeta(array(
            "income"=>array(
                "type"=>"number",
                "prefix"=>"$"
            )
        )))
        ->pipe($this->dataStore("second"));

    }
}