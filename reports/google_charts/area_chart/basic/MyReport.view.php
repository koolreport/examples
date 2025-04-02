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
        <h1>Basic</h1>
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
                "title" => 'Company Performance',
                "hAxis" => [
                    "title" => 'Year',
                    "titleTextStyle" => [
                        "color" => '#333'
                    ]
                ],
                "vAxis" => ["minValue" => 0]
            )
        ));
        ?>
    </div>

</div>