<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Join;

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
                        array(1,"John"),
                        array(2,"Marry"),
                        array(3,"Peter"),
                        array(4,"Donald"),
                    )
                ),
                "second"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "dataFormat"=>"table",
                    "data"=>array(
                        array("second_id","income"),
                        array(1,50000),
                        array(2,60000),
                        array(3,100000),
                        array(4,80000),
                    )
                ),
            )
        );
    }
    protected function setup()
    {
        //Prepare data
        $first = $this->src("first");
        $second = $this->src("second");

        $first->pipe($this->dataStore("first"));
        $second->pipe($this->dataStore("second"));

        //Save orginal data
        $join = new Join($first,$second,array("first_id"=>"second_id"));
        
        $join->pipe($this->dataStore("result"));
    }
}