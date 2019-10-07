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
	// use \koolreport\clients\Bootstrap;
	use \koolreport\cloudexport\Exportable;
	
    public function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";

        return array(
            "dataSources"=>$config
        );
    }   
    protected function setup()
    {
        $node = $this->src('salesCSV')

        ->pipe(new Map(array(
            '{value}' => function($row, $metaData) {
                $row['orderQuarter'] = 'Q ' . $row['orderQuarter'];
                return array($row);
            },
            '{meta}' => function($metaData) {
                $metaData['columns']['dollar_sales'] = array(
                    'type' => 'number',
                    // "prefix" => "$",
                    "decPoint" => ".",
                    "thoudsandSeparator" => ",",
                    "decimals" => 2,
                );
                $metaData['columns']['orderQuarter'] = array(
                    'type' => 'string',
                );
                return $metaData;
            },
        )))
        ;

        $node->pipe(new Cube(array(
            "rows" => "customerName",
            "column" => "orderQuarter",
            "sum" => "dollar_sales",
            "avg" => "dollar_sales",
            // "sum percent" => "dollar_sales",
            // 'debug' => true,
        )))
        

        ->pipe(new Map(array(
            '{value}' => function($row, $meta) {
                $row['H 1'] = Util::get($row, 'Q 1', 0) + Util::get($row, 'Q 2', 0);
                $row['H 2'] = Util::get($row, 'Q 3', 0) + Util::get($row, 'Q 4', 0);
                return $row;
            },
            '{meta}' => function($meta) {
                $cMetas = & $meta['columns'];
                $cMetas['Q 1']['type'] = 'number';
                $cMetas['Q 1']['decimals'] = 2;
                return $meta;
            }
        )))
        ->pipe(new Sort(array(
            '{{all}}' => 'desc'
        )))
        ->pipe(new Limit(array(
            5, 0
        )))
        ->pipe(new ColumnMeta(array(
            "{{all}}"=>array(
                "label"=>"Total",
            ),
            "customerName"=>array(
                "label"=>"Customer",
            ),
        )))
        ->saveTo($node2);
        
        $node2->pipe($this->dataStore('salesQuarterCustomer'));

        
        
        $node2->pipe(new RemoveColumn(array(
            "{{all}}", 'H 1', 'H 2'
        )))
        ->pipe(new Map([
            '{value}' => function($row) {
                foreach ($row as $k => $v)
                    if ($v == 0)
                        $row[$k] = null;
                return $row;
            }

        ]))
        ->pipe($this->dataStore('salesQuarterCustomerNoAll'));
        
        $node2->pipe(new OnlyColumn(array(
            'customerName', "{{all}}"
        )))->pipe($this->dataStore('salesQuarterCustomerAll'));


    } 

}