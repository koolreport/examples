<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\processes\ColumnMeta;
use \koolreport\processes\Limit;
use \koolreport\processes\Sort;
use \koolreport\processes\RemoveColumn;
use \koolreport\processes\OnlyColumn;
use \koolreport\processes\Map;
use \koolreport\cube\processes\Cube;
use \koolreport\core\Utility as Util;

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
  
    function setup()
    {
        $node = $this->src('dollarsales')
        ->pipe(new Limit(array(10, 0)));

        $node
        ->pipe($this->dataStore('origin'));
        
        $mapState = ['rest_sales' => 0];
        $node
        ->pipe(new Map([
            '{value}' => function ($row, $meta, $index) use (&$mapState) {
                if ($index >= 5) {
                    $mapState['rest_sales'] = $mapState['rest_sales'] + 1 * $row['dollar_sales'];
                    return null;
                } else {
                    return $row;
                }
            },
            '{end}' => function ($count) use (&$mapState) {
                $rowToSend = [
                    'productName' => 'The rest products: ',
                    'dollar_sales' => $mapState['rest_sales']
                ];
                return $rowToSend;
            },
        ]))
        ->pipe($this->dataStore('result'));

    }
}