<?php
require_once "SakilaRental.php";
$report = new SakilaRental;

$report->run()
->export('SakilaRentalPdf')
->pdf(array(
    "headerCallback" => "function(headerContent, pageNum, numPages){
        if (pageNum == 1) return ''; //don't show header for 1st page
        return headerContent;
    }",
    "footerCallback" => "function(footerContent, pageNum, numPages){
        if (pageNum == 1) return footerContent; 
        return ''; //don't show header for pages other than 1st one
    }",
    "format"=>"A4",
    "orientation"=>"portrait",
    //"zoom"=>2
))
->toBrowser("sakila_rental.pdf");