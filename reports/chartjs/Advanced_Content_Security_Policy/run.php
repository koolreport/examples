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
        Scriptable > Bubble | Chart.js sample
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #content {
            max-width: 640px;
            margin: auto;
            padding: 1rem;
        }

        .note {
            font-family: sans-serif;
            color: #5050a0;
            line-height: 1.4;
            margin-bottom: 1rem;
            padding: 1rem;
        }

        .note code {
            background-color: #f5f5ff;
            border: 1px solid #d0d0fa;
            border-radius: 4px;
            padding: 0.05rem 0.25rem;
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body>
    <script>
        Chart.platform.disableCSSInjection = true;
    </script>
</body>

</html>