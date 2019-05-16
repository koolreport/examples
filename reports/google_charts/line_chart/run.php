<?php

require_once "../../../koolreport.inc.php";
require_once "MyReport.php";

$report = new MyReport;
$report->run()->render();
