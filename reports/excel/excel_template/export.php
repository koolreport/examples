<?php
include "MyReport.php";
$report = new MyReport;
$report->run();
$report->exportToExcel('MyReport')->toBrowser("MyReport.xls");
