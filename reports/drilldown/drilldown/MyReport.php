<?php
require_once "../../../load.koolreport.php";

class MyReport extends \koolreport\KoolReport
{
    //use \koolreport\amazing\Theme;
    function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";
        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );

    }
    function setup()
    {

    }
}