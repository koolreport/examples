<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\AggregatedColumn;

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
                        array("item","cost"),
                        array("Machines",50000),
                        array("Human Resource",60000),
                        array("Materials",100000),
                        array("Others",80000),
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
            "cost"=>array(
                "type"=>"number",
                "prefix"=>"$"
            )
        )))
        ->saveTo($source);

        //Save orginal data
        $source->pipe($this->dataStore("origin"));
        
        //Pipe through process to get result
        $source->pipe(new AggregatedColumn(array(
            "total_cost"=>array("sum","cost"),
            "average_cost"=>array("avg","cost"),
            "min_cost"=>array("min","cost"),
            "max_cost"=>array("max","cost"),
        )))
        ->pipe(new ColumnMeta(array(
            "total_cost"=>array(
                "type"=>"number",
                "prefix"=>'$'
            ),
            "average_cost"=>array(
                "type"=>"number",
                "prefix"=>'$'
            ),
            "min_cost"=>array(
                "type"=>"number",
                "prefix"=>'$'
            ),
            "max_cost"=>array(
                "type"=>"number",
                "prefix"=>'$'
            ),
        )))
        ->pipe($this->dataStore("result"));
    }
}