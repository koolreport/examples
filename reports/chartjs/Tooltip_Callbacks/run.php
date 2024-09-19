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
        Tooltip Hooks
    </title>
</head>

<body>
</body>

</html>