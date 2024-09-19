<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../../../load.koolreport.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
?>
<?php
if (isset($_POST['command'])) {
?>
    <div id='report_render'>
        <?php
        $report->render();
        ?>
    </div>
<?php
    exit();
}
?>
<?php
if (!isset($_POST['command'])) {
?>
    <div id='report_render'>
        <?php
        $report->render();
        ?>
    </div>
<?php
}
?>


<html>

<head>
    <title>
        area > radar | Chart.js sample
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body,
        html {
            color: #333538;
            font-family: 'Lato', sans-serif;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        .content {
            max-width: 800px;
            margin: auto;
        }

        .toolbar {
            display: flex;
        }

        .toolbar>* {
            margin: 0 8px 0 0;
        }

        canvas {
            margin: auto;
            max-height: 448px;
            min-height: 448px;
            max-width: 512px;
            padding: 32px 0px 160px 0px;
        }

        table {
            color: #333;
            font-size: 0.9rem;
            margin: 8px 0;
            width: 100%
        }

        th {
            background-color: #f0f0f0;
            padding: 2px;
            line-height: 24px;
        }

        td {
            padding: 2px;
            text-align: center;
            line-height: 24px;
        }
    </style>
</head>

<body>

    <script>
        $(document).ready(function() {
            $("#smooth").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "run.php",
                    data: {
                        command: "smooth"
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
            $("#randomize").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "run.php",
                    data: {
                        command: "randomize"
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
            $("#propagate").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "run.php",
                    data: {
                        command: "propagate"
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
        })
    </script>
    <div class="content">
        <div class="wrapper">
            <div id="report_render"></div>
        </div>
        <div class="toolbar">
            <button id="propagate" class="btn">Propagate</button>
            <button id="smooth" class="btn">Smooth</button>
            <button id="randomize" class="btn">Randomize</button>
        </div>
        <div id="chart-analyser" class="analyser"></div>
    </div>

</body>

</html>