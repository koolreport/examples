<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

use \koolreport\processes\Limit;
use \koolreport\processes\Sort;

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "long_data"=>array(
                    "class"=>'\koolreport\datasources\CSVDataSource',
                    "fieldSeparator"=>"|",
                    'filePath'=>dirname(__FILE__)."/../../../databases/products.csv",
                )

            )
        );
    }
    protected function setup()
    {
        $this->src("long_data")
        ->pipe(new Limit(array(50)))
        ->pipe(new Sort(array(
            "productLine"=>"asc",
        )))
        ->pipe($this->dataStore("long_data"));
    }    
}