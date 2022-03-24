<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        $config = include "../../../config.php";

        return array(
            "dataSources"=>$config
        );
    }
    protected function setup()
    {

    }
}