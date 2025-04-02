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
        <h1>Custom Axis</h1>
    </div>
    <div style="margin-bottom=>50px;">
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
                "focusTarget" => 'category',
                "hAxis" => array(
                    "title" => 'Time of Day',
                    "format" => 'h:mm a',
                    "viewWindow" => array(
                        "min" => [7, 30, 0],
                        "max" => [17, 30, 0]
                    ),
                    "textStyle" => array(
                        "fontSize" => 14,
                        "color" => '#053061',
                        "bold" => true,
                        "italic" => false
                    ),
                    "titleTextStyle" => array(
                        "fontSize" => 18,
                        "color" => '#053061',
                        "bold" => true,
                        "italic" => false
                    )
                ),
                "vAxis" => array(
                    "title" => 'Rating (scale of 1-10)',
                    "textStyle" => array(
                        "fontSize" => 18,
                        "color" => '#67001f',
                        "bold" => false,
                        "italic" => false
                    ),
                    "titleTextStyle" => array(
                        "fontSize" => 18,
                        "color" => '#67001f',
                        "bold" => true,
                        "italic" => false
                    )
                )
            )
        ));
        ?>
    </div>

</div>