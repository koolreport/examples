<?php
    require_once "MyReport.php";
    $report = new MyReport();
    echo $report->run()->render();