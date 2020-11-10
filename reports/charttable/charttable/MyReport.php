<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    public function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "sales"=>array(
                    "class"=>'\koolreport\datasources\CSVDataSource',
                    "filePath"=>"../../../databases/customer_product_dollarsales2.csv",
                    "fieldSeparator"=>";"
                ),
            )
        );
    }   
    protected function setup()
    {
        $this->src('sales')
        ->pipe(new \koolreport\processes\Limit(15))
        ->pipe($this->dataStore("sales"));
    } 

}