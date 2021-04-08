<?php

class SaleByCountriesReport extends \koolreport\KoolReport
{
    public function settings()
    {
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );
    }
}