<?php

use \koolreport\pivot\widgets\PivotTable;
?>
<div class="report-content" style="overflow: scroll">
    <div class="text-center">
        <h1>Pivot's Dimensional Computations</h1>
        <p class="lead">
            The example shows how to compute custom dimensional (row, column, etc) values
        </p>
    </div>

    <?php
    $dataStore = $this->dataStore('sales');
    PivotTable::create(array(
        "dataStore" => $dataStore,
        "rowDimension" => "row",
        "columnDimension" => "column",
        "measures" => array(
            "dollar_sales - sum",
            // 'dollar_sales - count',
        ),
        // 'rowSort' => array(
        //     'dollar_sales - count' => 'desc',
        // ),
        'columnSort' => array(
            'orderMonth' => function ($a, $b) {
                return (int)$a < (int)$b;
            },
        ),
        // "showDataHeaders" => true,
        // 'rowCollapseLevels' => array(0),
        // 'columnCollapseLevels' => array(0),
        'width' => '100%',
        'headerMap' => array(
            'dollar_sales - sum' => 'Sales',
            'yearlyDifference' => 'Yearly Difference',
            'halfYearDifference' => 'Half Year Difference',
            '1' => 'January',
            '2' => 'February',
            '3' => 'March',
            '4' => 'April',
            '5' => 'May',
            '6' => 'June',
            '7' => 'July',
            '8' => 'August',
            '9' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ),
    ));
    ?>

</div>