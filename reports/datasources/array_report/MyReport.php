<?php

require_once "../../../load.koolreport.php";

use \koolreport\KoolReport;
use \koolreport\processes\Group;

class MyReport extends KoolReport
{
    public function settings()
    {
        return array(
            "dataSources" => array(
                "paramData" => array(
                    "class" => '\koolreport\datasources\ArrayDataSource',
                    "data" => $this->params["data"],
                    "dataFormat" => "table",
                ),
                "directTableData" => array(
                    "class" => '\koolreport\datasources\ArrayDataSource',
                    "dataFormat" => "table",
                    "data" => array(
                        array("Item", "Cost"),
                        array("Accessories", 3000),
                        array("Human Resource", 20000),
                        array("Material", 50000),
                        array("Machine", 30000),
                        array("Accessories", 5000),
                        array("Machine", 10000),
                        array("Material", 20000),
                    ),
                ),
                "directAssociateData" => array(
                    "class" => '\koolreport\datasources\ArrayDataSource',
                    "dataFormat" => "associate",
                    "data" => array(
                        array("Item" => "Accessories", "Cost" => 3000),
                        array("Item" => "Human Resource", "Cost" => 20000),
                        array("Item" => "Material", "Cost" => 50000),
                        array("Item" => "Machine", "Cost" => 30000),
                        array("Item" => "Accessories", "Cost" => 5000),
                        array("Item" => "Machine", "Cost" => 10000),
                        array("Item" => "Material", "Cost" => 20000),
                    ),
                ),
            )
        );
    }
    protected function setup()
    {
        $this->src('directAssociateData')
            ->pipe(new Group(array(
                "by" => "Item",
                "sum" => "Cost",
            )))
            ->pipe($this->dataStore('cost'));
    }
}
