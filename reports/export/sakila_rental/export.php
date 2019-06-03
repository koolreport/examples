<?php

require_once "SakilaRental.php";
$report = new SakilaRental;

$report->run()
->export('SakilaRentalPdf')
->pdf(array(
    "format"=>"A4",
    "orientation"=>"portrait",
    //"zoom"=>2
))
->toBrowser("sakila_rental.pdf");