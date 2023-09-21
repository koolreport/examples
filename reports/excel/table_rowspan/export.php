<?php
include "MyReport.php";
$report = new MyReport;
$report->run();

$exportType = $_GET["type"];
if ($exportType === "excel") {
    $report->exportToExcel('MyReportExcel')->toBrowser("MyReportExcel.xlsx");
} else {
    $report->exportToXLSX('MyReportExcel')->toBrowser("MyReportBigSpreadsheet.xlsx");
}
