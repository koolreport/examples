<?php
require_once "../../../load.koolreport.php";

use \koolreport\processes\Map;
use \koolreport\processes\Limit;
use \koolreport\processes\Filter;
use \koolreport\cube\processes\Cube;
use \koolreport\pivot\processes\Pivot;

class MyReport extends koolreport\KoolReport
{
    use \koolreport\export\Exportable;
    use \koolreport\excel\ExcelExportable;

    function settings()
    {
        return array(
            "dataSources" => array(
                "dollarsales"=>array(
                    'filePath' => '../../../databases/customer_product_dollarsales2.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"      
                ), 
            )
        );
    }    function setup()
    {
        $this->src('dollarsales')
        ->pipe($this->dataStore('sales'));
    }
}
