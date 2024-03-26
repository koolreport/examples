<?php
use \koolreport\datagrid\DataTables;
use \koolreport\morris_chart;
use \koolreport\sparklines;
use \koolreport\widgets\google;
use \koolreport\widgets\koolphp\Table;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Map Process</h1>
        <p class="lead">
            Change values
        </p>
    </div>

    <?php
        $ds = 
        Table::create(array(
            "dataSource" => $this->dataStore('origin'),
            "columns" => array(
                "productName", "orderQuarter"
            ),
        ));
    ?>

    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <pre style="font-weight:bold"><code>
->pipe(new Map(array(
    '{value}' => function($row, $metaData, $index) {
        $row['orderQuarter'] = 'Q' . $row['orderQuarter'];
        return array($row);
    }
)))</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">

    <?php
    Table::create(array(
        "dataSource" => $this->dataStore('result'),
        "columns" => array(
            "productName", "orderQuarter"
        ),
    ));
    ?>

</div>