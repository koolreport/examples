<?php 

require_once "SakilaRental.php";
$report = new SakilaRental;
$report->run()->render();