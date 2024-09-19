<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../../../load.koolreport.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
// $report->render();
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
    exit;
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
        Line Chart
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        canvas {
            width: 1000px !important;
            height: 400px !important;
        }
    </style>
</head> 

<body>
    Chart Type:
    <select id="type">
        <option value="line">Line</option>
        <option value="bar">Bar</option>
    </select>
    <select id="unit">
        <option value="second">Second</option>
        <option value="minute">Minute</option>
        <option value="hour">Hour</option>
        <option value="day" selected>Day</option>
        <option value="month">Month</option>
        <option value="year">Year</option>
    </select>
    <button id="update">update</button>

    <script>
        $(document).ready(function() {
            $('#update').click(function(e) {
                e.preventDefault();
                var unit = $('#unit').map(function() {
                    return this.value;
                }).get();
                var type = $('#type').map(function() {
                    return this.value;
                }).get();
                $.ajax({
                    type: "POST",
                    url: 'run.php',
                    data: {
                        command: 'update',
                        unit: unit,
                        type: type
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
        })
    </script>
    <div>
        <div id='report_render'>
        </div>
    </div>
</body>

</html>