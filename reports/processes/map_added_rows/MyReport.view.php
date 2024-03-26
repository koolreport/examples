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
            Added rows
        </p>
    </div>

    <?php
        $ds = 
        Table::create(array(
            "dataSource" => $this->dataStore('origin'),
            "columns" => array(
                "productName", "dollar_sales"
            ),
        ));
    ?>

    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <pre style="font-weight:bold"><code>
->pipe(new Map(array(
    '{end}' => function($count) {
        $addedRows = [
            ['productName' => 'Number of products: ', 'dollar_sales' => $count],
            ['productName' => 'Total sales: ', 'dollar_sales' => 'Unknown amount'],

        ];
        return $addedRows;
    }
)))</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">

    <?php
    Table::create(array(
        "dataSource" => $this->dataStore('result'),
        "columns" => array(
            "productName", "dollar_sales"
        ),
    ));
    ?>

</div>