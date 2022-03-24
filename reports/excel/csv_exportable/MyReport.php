<?php
require_once "../../../load.koolreport.php";

use \koolreport\processes\Map;
use \koolreport\processes\Limit;
use \koolreport\processes\ColumnMeta;
use \koolreport\cube\processes\Cube;
use \koolreport\pivot\processes\Pivot;

class MyReport extends koolreport\KoolReport
{
    use \koolreport\excel\CSVExportable;

    function settings()
    {
        return array(
            "dataSources" => array(
                "dollarsales" => array(
                    'filePath' => '../../../databases/customer_product_dollarsales2.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"
                ),
            )
        );
    }
    function setup()
    {
        $node = $this->src('dollarsales')
        ->pipe(new ColumnMeta(array(
            "dollar_sales" => [
                "type" => "number"
            ],
            "orderDate" => [
                "type" => "datetime"
            ]
        )));
        
        $node->pipe(new Limit(array(
            50, 0
        )))
        ->pipe($this->dataStore('orders'));

        if (isset($this->params['export'])) {
            $multiply = isset($_GET["multiply"]) ? $_GET['multiply'] : 1;
            for ($i = 0; $i < $multiply; $i++) {
                $node->pipe($this->dataStore('ordersExport'));
            }
        }
    }
}
