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
            Map data rows' value and metadata
        </p>
    </div>

    <?php
        $ds = $this->dataStore('salesProduct');
        Table::create(array(
            'name' => 'salesProduct',
            "dataSource" => $ds,
        ));
    ?>

    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <pre style="font-weight:bold"><code>
->pipe(new Map(array(
    '{value}' => function($row, $metaData) {
        $row['orderQuarter'] = 'Q ' . $row['orderQuarter'];
        return array($row);
    },
    '{meta}' => function($metaData) {
        $metaData['columns']['productName'] = array(
            'label' => 'Products',
        );
        $metaData['columns']['orderYear'] = array(
            'label' => 'Year',
            'type' => 'string',
        );
        $metaData['columns']['orderQuarter'] = array(
            'label' => 'Quarter',
            'type' => 'string',
        );
        $metaData['columns']['dollar_sales'] = array(
            'label' => 'Sales',
            'type' => 'number',
            "prefix" => "$",
        );
        return $metaData;
    },
)))</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">

    <?php
    $ds = $this->dataStore('salesProductMap');
    Table::create(array(
        'name' => 'salesProductMap',
        "dataSource" => $ds,
    ));
    ?>

    <?php
        google\ColumnChart::create(array(
            "dataStore" => $this->dataStore('salesProductChart'),
            "options" => array(
                'title' => 'Products\' Sales',
                'isStacked' => true,
            ),
            "width" => '100%',
            // 'height'=>'400px',
        ));
    ?>

</div>