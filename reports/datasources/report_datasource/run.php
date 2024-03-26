<?php
require_once "SakilaRental2.php";

$report = new SakilaRental2;
$report->run()->render();
