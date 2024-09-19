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
if (isset($_GET)) {
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
        Time Scale Point Data
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <br>
    <button id="randomizeData" class="btn">Randomize Data</button>
    <button id="addDataset" class="btn">Add Dataset</button>
    <button id="removeDataset" class="btn">Remove Dataset</button>
    <button id="addData" class="btn">Add Data</button>
    <button id="removeData" class="btn">Remove Data</button>

    <script>
        $(document).ready(function() {
            $('#randomizeData').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'run.php',
                    data: {
                        command: 'randomizeData',
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
            $('#addDataset').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'run.php',
                    data: {
                        command: 'addDataset'
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
            $('#removeDataset').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'run.php',
                    data: {
                        command: 'removeDataset'
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
            $('#addData').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'run.php',
                    data: {
                        command: 'addData'
                    },
                    success: function(response) {
                        $('#report_render').html(response);
                    }
                })
            })
            $('#removeData').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'run.php',
                    data: {
                        command: 'removeData'
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