<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../../../../load.koolreport.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
// $report->render();
?>
<?php
if (isset($_POST['command'])) {
?>
    <div id="report_render">
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
    <div id="report_render">
        <?php
        $report->render();
        ?>
    </div>
<?php
}
?>

<script>
    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "second"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 1000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "third"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 2000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "fourth"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 3000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "fifth"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 4000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "sixth"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 5000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "seventh"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 6000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "eighth"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 7000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "ninth"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 8000);

    setTimeout(function() {
        $.ajax({
            type: "POST",
            url: 'run.php',
            data: {
                command: "tenth"
            },
            success: function(response) {
                $('#report_render').html(response);
            },
        });
    }, 9000);
</script>