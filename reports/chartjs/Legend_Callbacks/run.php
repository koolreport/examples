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
        Legend Callbacks
    </title>
    <style>
        body,
        html {
            height: 100%;
            font-family: sans-serif;
        }

        #log {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: #EEE;
            float: right;
            width: 20%;
            padding: 8px;
            overflow-y: auto;
            white-space: pre;
            line-height: 1.5em;
        }
    </style>
</head>

<body>
    <div id="log"></div>
    <script>
        var logEntry = 1;
        var logElement = document.getElementById('log');

        function log(text) {
            logElement.innerText += logEntry + '. ' + text + '\n';
            logElement.scrollTop = logElement.scrollHeight;
            logEntry++;
        }
    </script>
</body>

</html>