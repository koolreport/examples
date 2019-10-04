<?php

include "MyReport.php";
$report = new MyReport;
$report->run();

$type = isset($_GET['type']) ? $_GET['type'] : 'CSV';
if ($type === 'XLSX') {
    $report->exportToXLSX('MyReportSpreadsheet')
    ->toBrowser("MyReport.xlsx");
} elseif ($type === 'ODS') {
    $report->exportToODS('MyReportSpreadsheet')
    ->toBrowser("MyReport.ods");
} elseif ($type === 'CSV') {
    $report->exportToCSV('MyReportSpreadsheet')
    ->toBrowser("MyReport.csv");
}
