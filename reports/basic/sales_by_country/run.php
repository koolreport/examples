<?php 

require_once "SalesByCountry.php";
$report = new SalesByCountry;
$report->run()->render();
