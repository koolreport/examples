<?php

use \koolreport\widgets\google\CandlestickChart;

$data1 = [
    ['month', 'data', 'data2', 'data3', 'data4'],
    ['Mon', 20, 28, 38, 45],
    ['Tue', 31, 38, 55, 66],
    ['Wed', 50, 55, 77, 80],
    ['Thu', 77, 77, 66, 50],
    ['Fri', 68, 66, 22, 15]
];

$data2 = [
    ['month', 'data', 'data2', 'data3', 'data4'],
    ['Mon', 28, 28, 38, 38],
    ['Tue', 38, 38, 55, 55],
    ['Wed', 55, 55, 77, 77],
    ['Thu', 77, 77, 66, 66],
    ['Fri', 66, 66, 22, 22]
];
?>
<div class="report-content">
    <div class="text-center">
        <h1>CandlestickChart</h1>
        <p class="lead">
            This example shows how to use CandlestickChart
        </p>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        CandlestickChart::create(array(
            "dataSource" => $data1,
            "columns" => array(
                'month',
                'data',
                'data2',
                'data3',
                'data4'
            ),
            "options" => array(
                "legend" => 'none'
            )
        ));
        ?>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        CandlestickChart::create(array(
            "title" => 'Waterfall charts',
            "dataSource" => $data2,
            "columns" => array(
                'month',
                'data',
                'data2',
                'data3',
                'data4'
            ),
            "options" => array(
                "legend" => 'none',
                "bar" => array(
                    "groupWidth" => '100%'
                ),
                "candlestick" => array(
                    "fallingColor" => array(
                        "strokeWidth" => 0,
                        "fill" => '#a52714'
                    ),
                    "risingColor" => array(
                        "strokeWidth" => 0,
                        "fill" => '#0f9d58'
                    )
                )
            )
        ));
        ?>
    </div>
</div>