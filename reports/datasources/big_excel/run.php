<?php

require_once "MyReport.php";
$report = new MyReport;
$report->run()->render();