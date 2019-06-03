<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";
use \koolreport\processes\Limit;
use \koolreport\processes\Sort;
use \koolreport\processes\Map;
use \koolreport\processes\OnlyColumn;
use \koolreport\processes\ColumnMeta;
use \koolreport\cube\processes\SuperCube;
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
        ->pipe(new OnlyColumn([
            'productName', 'dollar_sales'
        ]))
        ->pipe(new ColumnMeta([
            'dollar_sales' => ['type' => 'number']
        ]))
        ->pipe(new Limit(array(
            10, 0
        )))
        ;

        $node->pipe($this->dataStore('salesProduct'));

        $node
        ->pipe(new Map([
            '{value}' => function($row, $meta, $index, $mapState) {
                $numTopRows = 2;
                //If a row is among the first 2 rows
                if ($index < $numTopRows) {
                    $mappedRows = [$row];
                    //return it to send to next process or datastore
                    return ['{rows}' => $mappedRows]; 
                }
                //Otherwise,
                //initialise a key of this Map's state to use for sum
                $sum = Util::init($mapState, 'sumOthers', []);
                foreach ($row as $columnName => $value) {
                    Util::init($sum, $columnName, 0);
                    //if column name = 'dollar_sales', sum it
                    $sum[$columnName] = $columnName === 'dollar_sales' ? 
                        $sum[$columnName] + $value : 'Other Customers';
                }
                //Save the sum to this Map's state
                $mapState['sumOthers'] = $sum;
                $mappedRows = [];
                //Skip rows after the first 2 rows (they won't be sent to next process or datastore) 
                //return this Map's state to save it
                return ['{rows}' => $mappedRows, '{state}' => $mapState];
                
            },
            '{end}' => function($count, $mapState) {
                //After all rows had been sent
                //retrieve this Map's state and send it at the end of Map process
                $rowsToSend = [$mapState['sumOthers']];
                return $rowsToSend;
            },
        ]))
        ->pipe($this->dataStore('salesProductMap'));

    }
}