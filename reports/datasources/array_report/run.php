<?php 

require_once "MyReport.php";
$report = new MyReport(array(
    "data"=>array(
        array("Item","Cost"),
        array("Accessories",3000),
        array("Human Resource",20000),
        array("Material",50000),
        array("Machine",30000),
        array("Accessories",5000),
        array("Machine",10000),
        array("Material",20000),
    )
));
$report->run()->render();