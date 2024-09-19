<?php
require_once "../../../load.koolreport.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
$report->render();
?>

<html>

<head>
    <title>
        Min/Max Settings
    </title>
</head>

<body>
    <div>
        <div id='report_render'>
        </div>
    </div>
</body>

</html>