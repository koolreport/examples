<?php

require_once "../../../load.koolreport.php";

use \koolreport\KoolReport;
use \koolreport\processes\Group;

class MyReport extends KoolReport
{
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "data"=>array(
                    "class"=>'\koolreport\datasources\ArrayDataSource',
                    "data"=>$this->params["data"],
                    "dataFormat"=>"table",
                )
            )
        );
    }   
    protected function setup()
    {
        $this->src('data')
        ->pipe(new Group(array(
            "by"=>"Item",
            "sum"=>"Cost",
        )))
        ->pipe($this->dataStore('cost'));
    } 
}
