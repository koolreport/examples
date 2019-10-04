<?php
// include "c:/Users/Dong/Documents/GitHub/php-client/src/Service.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
$secretToken = '6e27e9f5b6749f6a981c56c9bb70e0b94a0b9f3edf6d13facea9bbda6c9281a4';
$type=isset($_GET['type']) ? $_GET['type'] : 'PDF';
if ($type === 'cloudJPG') {
    $report->cloudExport("MyReportPDF")
    ->chromeHeadlessio($secretToken)
    ->jpg(array(
        // "format"=>"A4",
        // "fullPage" => false
    ))
    ->toBrowser("MyReport.jpg")
    ;
} else if ($type === 'cloudPDF') {
    
    $settings = [
        // 'useLocalTempFolder' => true
    ];
    $pdfOptions = [
        "format"=>"A4",
        'landscape'=>false,
        // 'displayHeaderFooter' => true,
        // 'headerTemplate' => "
        //     <img src='http://www.chromium.org/_/rsrc/1438879449147/config/customLogo.gif?revision=3' />
        // ",
        // 'footerTemplate' => '
        //     <div id="footer-template" 
        //         style="font-size:10px !important; color:#808080; padding-left:10px">
        //         <span>Footer command: </span>
        //         <span class="date"></span>
        //         <span class="title"></span>
        //         <span class="url"></span>
        //         <span class="pageNumber"></span>
        //         <span class="totalPages"></span>
        //     </div>
        // ',
        // 'margin' => [
        //     'top'    => '100px',
        //     'bottom' => '200px',
        //     'right'  => '30px',
        //     'left'   => '30px'
        // ],
        // "noRepeatTableHeader" => true,
        "noRepeatTableFooter" => true,
    ];
    $report->cloudExport("MyReportPDF")
    ->chromeHeadlessio($secretToken)
    ->settings($settings)
    ->pdf($pdfOptions)
    ->toBrowser("MyReport.pdf")
    ;
} 
