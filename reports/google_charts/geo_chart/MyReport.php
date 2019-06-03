<?php
require_once "../../../load.koolreport.php";

use \koolreport\processes\Custom;
class MyReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "population2016"=>array(
                    "class"=>'\koolreport\datasources\CSVDataSource',
                    'filePath'=>dirname(__FILE__)."/../../../databases/population2016.csv",
                    "fieldSeparator"=>";"
                )
            )
        );
    }

    protected function setup()
    {
        $this->src("population2016")
        ->pipe($this->dataStore("population2016"));
    }


}