<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Join;
use \koolreport\processes\InnerJoin;
use \koolreport\processes\LeftJoin;
use \koolreport\processes\RightJoin;
use \koolreport\processes\OuterJoin;
use \koolreport\processes\FullJoin;

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
        $first = $this->src("first");
        $second = $this->src("second");

        $first->pipe($this->dataStore("first"));
        $second->pipe($this->dataStore("second"));

        $join = new Join($first,$second,array("first_id"=>"second_id"));
        $join->pipe($this->dataStore("join_result"));

        // $join = new InnerJoin($first,$second,array("first_id"=>"second_id"));
        $leftjoin = new LeftJoin($first,$second,array("first_id"=>"second_id"));
        $leftjoin->pipe($this->dataStore("leftjoin_result"));

        $rightjoin = new RightJoin($first,$second,array("first_id"=>"second_id"));
        $rightjoin->pipe($this->dataStore("rightjoin_result"));

        // $join = new OuterJoin($first,$second,array("first_id"=>"second_id"));
        $fulljoin = new FullJoin($first,$second,array("first_id"=>"second_id"));
        $fulljoin->pipe($this->dataStore("fulljoin_result"));
    }
}