<?php
require_once "SakilaRental.php";
$report = new SakilaRental;

// ini_set('pcre.backtrack_limit', 8000000);
// ini_set('memory_limit', '512M');
$report->run()
->printpdf('SakilaRentalPdf')
->pdf(array(
    // "headers" => [
    //     "1stHeader" => "",
    //     "mainHeader" => "",
    // ],
    // "footers" => [
    //     "1stFooter" => "",
    //     "mainFooter" => "",
    // ],
))
->toBrowser("sakila_rental.pdf");