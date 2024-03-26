<?php

require_once "../../../load.koolreport.php";

class SakilaRental2 extends \koolreport\KoolReport
{
    public function settings()
    {
        require_once "../csv_report/SakilaRental.php";
        return array(
            "dataSources"=>array(
                "sakila_rental"=>array(
                    "class"=>"/koolreport/datasources/ReportDataSource",
                    "report"=>"SakilaRental",
                )
            )
        );
    }   
    protected function setup()
    {
        $this->src('sakila_rental')
        ->dataStore('sale_by_month') //We want to get data from "sale" data store of HardwareSaleReport
        ->pipe($this->dataStore('sale_by_month_2'));
    } 
}
