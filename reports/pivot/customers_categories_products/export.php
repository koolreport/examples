<?php

require_once "CustomersCategoriesProducts.php";
$report = new CustomersCategoriesProducts();

$filehandler = $report->run()
->export("CustomersCategoriesProductsPdf")
->pdf(
  array(
    // "format"=>"A4",
    // "orientation"=>"landscape",
    "width" => '29cm',
    "height" => '21cm',
    "margin" => '2cm'
  )
);

$filehandler->toBrowser("CustomersCategoriesProducts.pdf");