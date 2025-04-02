<?php

use \koolreport\widgets\google\AreaChart;

$data = [
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
];
?>
<div class="report-container">
    <div class="text-center">
        <h1>Stacked Areas</h1>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        AreaChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Year',
                'Sales',
                'Expenses'
            ),
            "options" => array(
                "title" => 'Stacked',
                "hAxis" => [
                    "title" => 'Year',
                    "titleTextStyle" => [
                        "color" => '#333'
                    ]
                ],
                "vAxis" => ["minValue" => 0],
                "isStacked" => true,
                "legend" => [
                    "position" => 'top',
                    "maxLines" => 3
                ],
            )
        ));
        ?>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        AreaChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Year',
                'Sales',
                'Expenses'
            ),
            "options" => array(
                "title" => '100% Stacked',
                "hAxis" => [
                    "title" => 'Year',
                    "titleTextStyle" => [
                        "color" => '#333'
                    ]
                ],
                "vAxis" => ["minValue" => 0],
                "isStacked" => "relative",
                "legend" => [
                    "position" => 'top',
                    "maxLines" => 3
                ],
            )
        ));
        ?>
    </div>

</div>