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
            Change metadata
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
    '{meta}' => function($metaData) {
        $metaData['columns']['productName'] = array(
            'label' => 'Products',
            'type' => 'string',
        );
        $metaData['columns']['dollar_sales'] = array(
            'label' => 'Sales',
            'type' => 'number',
            'prefix' => '$',
            'decimals' => 1,
        );
        return $metaData;
    },
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