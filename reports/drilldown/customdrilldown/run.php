<?php

//require_once "../../../../koolreport/core/autoload.php";
require_once "MyReport.php";

$report = new MyReport;
$report->run()->render();