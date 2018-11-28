<?php
    require_once "SalesQuarters.php";
    $salesYear = isset($_POST['salesYear']) ? $_POST['salesYear'] : array(2003, 2004, 2005);

    $report = new SalesQuarters(array(
        'salesYear' => $salesYear
    ));
    echo $report->run()->render(); ?>