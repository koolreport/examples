<?php

use \koolreport\widgets\google\ColumnChart;

$data = [
    ['Time of Day', 'Motivation Level', 'Energy Level'],
    [[8, 0, 0], 1, .25],
    [[9, 0, 0], 2, .5],
    [[10, 0, 0],  3, 1],
    [[11, 0, 0], 4, 2.25],
    [[12, 0, 0], 5, 2.25],
    [[13, 0, 0], 6, 3],
    [[14, 0, 0], 7, 4],
    [[15, 0, 0], 8, 5.25],
    [[16, 0, 0], 9, 7.5],
    [[17, 0, 0], 10, 10],
];
?>
<div class="report-content">
    <div class="text-center">
        <h1>Custom Colors</h1>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Time of Day' => array(
                    "type" => 'timeofday',
                ),
                'Motivation Level',
                'Energy Level'
            ),
            "options" => array(
                "title" => 'Motivation and Energy Level Throughout the Day',
                "colors" => ['#9575cd', '#33ac71'],
                "hAxis" => [
                    "title" => 'Time of Day',
                    "format" => 'h:mm a',
                    "viewWindow" => [
                        "min" => [7, 30, 0],
                        "max" => [17, 30, 0]
                    ]
                ],
                "vAxis" => [
                    "title" => 'Rating (scale of 1-10)'
                ]
            )
        ));
        ?>
    </div>

</div>