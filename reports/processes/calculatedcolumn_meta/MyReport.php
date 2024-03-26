<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\ColumnMeta;
use \koolreport\processes\CalculatedColumn;

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
                        array("name","hour_rate","working_hours"),
                        array("John",20,123),
                        array("Marry",30,112),
                        array("Peter",25,132),
                        array("Donald",40,89),
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
            "hour_rate"=>array(
                "type"=>"number",
                "prefix"=>'$',
                "suffix"=>'/hrs',
            ),
            "working_hours"=>array(
                "type"=>"number",
                "suffix"=>' hrs',
            ),
        )))
        ->saveTo($source);

        //Save orginal data
        $source->pipe($this->dataStore("origin"));
        
        //Pipe through process to get result
        $source->pipe(new CalculatedColumn(array(
            "total_meta"=>array(
                "exp"=>"{hour_rate}*{working_hours}",
                "type"=>"number",
                "decimals" => 4,
                "prefix"=>'$'
            )
        )))
        ->pipe($this->dataStore("result"));
    }
}