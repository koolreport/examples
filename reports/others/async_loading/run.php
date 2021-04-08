<?php

require_once "../../../load.koolreport.php";

require_once "MainReport.php";

$report = new MainReport;

$report->run()->render();