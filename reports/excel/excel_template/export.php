<?php
require_once "../../../load.koolreport.php";

include "MyReport.php";
$report = new MyReport;
$report->run();
$report->exportToExcel('MyReport')->toBrowser("MyReport.xlsx");
