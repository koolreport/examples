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
            Map with stateful variables
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
$mapState = ['rest_sales' => 0];
...
->pipe(new Map(array(
    ->pipe(new Map([
        '{value}' => function ($row, $meta, $index) use (&$mapState) {
            if ($index >= 5) {
                $mapState['rest_sales'] = $mapState['rest_sales'] + 1 * $row['dollar_sales'];
                return null;
            } else {
                return $row;
            }
        },
        '{end}' => function ($count) use (&$mapState) {
            $rowToSend = [
                'productName' => 'The rest products: ',
                'dollar_sales' => $mapState['rest_sales']
            ];
            return $rowToSend;
        },
    ]))
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