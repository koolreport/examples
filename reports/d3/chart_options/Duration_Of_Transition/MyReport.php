<?php
require_once "../../../../load.koolreport.php";

class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources" => array(
                "d3Data1" => array(
                    'filePath' => '../../../../databases/c3_test.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"
                ),
                "d3Data2" => array(
                    'filePath' => '../../../../databases/c3_test2.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"
                )
            )
        );
    }

    function setup()
    {
        $this->src("d3Data1")->pipe($this->dataStore('data1'));
        $this->src("d3Data2")->pipe($this->dataStore('data2'));
    }
}
