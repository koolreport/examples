<?php
require_once "SakilaRental.php";
$report = new SakilaRental;

$report->run()
->export('SakilaRentalPDF')
->pdf(array(
    "headerCallback" => "function(headerContent, pageNum, numPages){
        if (pageNum == 1) return ''; //don't show header for the 1st page
        return headerContent;
    }",
    "footerCallback" => "function(footerContent, pageNum, numPages){
        if (pageNum == 1) return ''; //don't show footer for the 1st page
        return footerContent.replace('{pageNum}', pageNum - 1);
    }",
    "format"=>"A4",
    "orientation"=>"portrait",
    //"zoom"=>2
))
->toBrowser("SakilaRentalPDF.pdf");