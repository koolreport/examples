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
        area > boundaries | Chart.js sample
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #report_render {
            max-width: 800px;
            margin: auto;
        }

        .content {
            max-width: 800px;
            margin: auto;
            padding: 16px 32px;
        }

        .wrapper {
            min-height: 400px;
            padding: 16px 0;
            position: relative;
        }

        .wrapper.col-2 {
            display: inline-block;
            min-height: 256px;
            min-width: 392px;
        }

        .toolbar {
            display: flex;
        }

        .toolbar>* {
            margin: 0 8px 0 0;
        }

        canvas {
            min-height: 256px;
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
                    url: 'run.php',
                    data: {
                        command: "randomize"
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
        })
    </script>
    <div class="content">
        <div id="report_render"></div>
        <div class="toolbar">
            <button id="smooth" class="btn">Smooth</button>
            <button id="randomize" class="btn">Randomize</button>
        </div>
    </div>
</body>

</html>