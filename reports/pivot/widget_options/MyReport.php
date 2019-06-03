<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\pivot\processes\Pivot;
use \koolreport\pivot\processes\PivotExtract;
use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Filter;

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
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
    }

    public function setup()
    {
        $node = $this->src('dollarsales');

        $node->pipe(new Filter(array(
            array('customerName', '<', 'Au'),
            array('orderYear', '>', 2003),
        )))
        ->pipe(new ColumnMeta(array(
            "dollar_sales" => array(
                'type' => 'number',
                // 'label' => 'sales',
                "prefix" => "$",
            ),
        )))
        ->saveTo($node2);

        $node2->pipe(new Pivot(array(
            "dimensions" => array(
                // "column" => "orderYear, orderQuarter, orderMonth, orderDay",
                "column" => "orderYear, orderQuarter",
                "row" => "customerName, productLine, productName",
                // "row" => "customerName, productLine",
            ),
            "aggregates" => array(
                "sum" => "dollar_sales",
                "count" => "dollar_sales",
                "avg" => "dollar_sales",
                'sum percent' => 'dollar_sales',
                'count percent' => 'dollar_sales',
            ),
        )))->pipe($this->dataStore('salesTable'));

        $node2->pipe(new Pivot(array(
            "dimensions" => array(
                // "column" => "orderYear, orderQuarter, orderMonth, orderDay",
                "column" => "orderYear, orderQuarter",
                "row" => "customerName, productLine, productName",
                // "row" => "customerName, productLine",
            ),
            "aggregates" => array(
                "sum" => "dollar_sales",
                "count" => "dollar_sales",
                "avg" => "dollar_sales",
                'sum percent' => 'dollar_sales',
                'count percent' => 'dollar_sales',
            ),
            'partialProcessing' => true,
        )))->pipe($this->dataStore('salesMatrix'));
    }
}