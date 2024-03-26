<?php
include "MyReport.php";
// var_dump($_GET); exit;
$report = new MyReport;
$report->run();
$type = $_GET['type'];
if ($type === 'excel') {
    $report->exportToExcel('MyReportExcel')->toBrowser("MyReport.xlsx");
} else if ($type === 'bigspreadsheet') {
    $report->exportToXLSX('MyReportExcel')->toBrowser("MyReport.xlsx");
}
// $report->exportToExcel([
//     "dataStores" => [
//         "orders" => [
//             "filtering" => function($row, $index) { 
//                 if (stripos($row['customerName'], "Baane Mini Imports") !== false)
//                     return false;
//                 return true;
//             },
//             "sorting" => ['dollar_sales' => 'desc'],
//             "paging" => [5, 2],
//             "showHeader" => false, //default: true
//             "showBottomHeader" => true, //default: false
//             "showFooter" => true, //default: false
//             "map" => [
//                 "header" => function($colName) { return $colName; },
//                 "bottomHeader" => function($colName) { return $colName; },
//                 "cell" => function($colName, $value, $row) { return $value; },
//                 "footer" => function($colName, $footerValue) { return $footerValue; },
//             ],
//             "excelStyle" => [
//                 "header" => function($colName) { 
//                     return [
//                         'font' => [
//                             'italic' => true,
//                             'bold' => false,
//                             'color' => [
//                                 'rgb' => '808080',
//                             ]
//                         ],
//                     ]; 
//                 },
//                 "bottomHeader" => function($colName) { return []; },
//                 "cell" => function($colName, $value, $row) { 
//                     return [
//                         'font' => [
//                             'italic' => true,
//                             'color' => [
//                                 'rgb' => '808080',
//                             ]
//                         ],
//                     ]; 
//                  },
//                 "footer" => function($colName, $footerValue) { return []; },
//             ]
//         ]
//     ]
// ])
// ->toBrowser("MyReport.xlsx");
