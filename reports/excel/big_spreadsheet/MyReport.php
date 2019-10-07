<?php
require_once "../../../load.koolreport.php";

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\excel\BigSpreadsheetExportable;

    function settings()
    {
        return array(
            "dataSources" => array(
                "dollarsales"=>array(
                    'filePath' => '../../../databases/customer_product_dollarsales2.xlsx',
                    'class' => '\koolreport\excel\BigSpreadsheetDataSource'      
                ), 
            )
        );
    }    function setup()
    {
        $node = $this->src('dollarsales')
        ->pipe($this->dataStore('sales'));
    }
}
