<?php
require_once "../../../load.koolreport.php";

class MyReport extends \koolreport\KoolReport
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