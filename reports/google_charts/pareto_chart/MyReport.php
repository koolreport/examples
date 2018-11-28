<?php

class MyReport extends \koolreport\KoolReport
{
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "data"=>array(
                    "class"=>'\koolreport\datasources\CSVDataSource',
                    "filePath"=>dirname(__FILE__)."/data.csv",
                )
            )
        );
    }   
}