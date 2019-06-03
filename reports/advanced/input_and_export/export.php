<?php

require_once "Order.php";
$report = new Order;
$report->run()
->export('OrderPdf')
->pdf(array(
    "format"=>"A4",
    "orientation"=>"portrait",
    //"zoom"=>2,
    "margin"=>"1in"
))
->toBrowser("orders.pdf");