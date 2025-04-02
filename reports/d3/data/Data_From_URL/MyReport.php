<?php
require_once "../../../../load.koolreport.php";
class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        return array(
            "dataSources" => array(
                "data1" => array(
                    'filePath' => '../../../../databases/c3_test.csv',
                    'fieldSeparator' => ';',
                    'class' => "\koolreport\datasources\CSVDataSource"
                ),
            )
        );
    }
    function setup()
    {
        $this->src("data1")->pipe($this->dataStore('firstData'));
        $jsonData = file_get_contents('../../../../databases/c3_test.json');
        $arrayData = json_decode($jsonData, true);
        $transformedData = [];
        $rowCount = count($arrayData["data1"]);
        for ($i = 0; $i < $rowCount; $i++) {
            $transformedData[] = array(
                "data1" => $arrayData["data1"][$i],
                "data2" => $arrayData["data2"][$i],
                "data3" => $arrayData["data3"][$i],
            );
        }
        $this->dataStore("secondData")->data($transformedData);
    }
}
