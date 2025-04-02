<?php

use \koolreport\widgets\google\SteppedAreaChart;

$data = [
    ['Director (Year)',  'Rotten Tomatoes', 'IMDB'],
    ['Alfred Hitchcock (1935)', 8.4,         7.9],
    ['Ralph Thomas (1959)',     6.9,         6.5],
    ['Don Sharp (1978)',        6.5,         6.4],
    ['James Hawes (2008)',      4.4,         6.2]
];
?>
<div class="report-container">
    <div class="text-center">
        <h1>Some Common Options</h1>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        SteppedAreaChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Director (Year)',
                'Rotten Tomatoes',
                'IMDB'
            ),
            "options" => array(
                "title" => 'The decline of \'The 39 Steps\'',
                "vAxis" => [
                    "title" => 'Accumulated Rating'
                ],
                "isStacked" => true,
                "backgroundColor" => '#ddd',
                "legend" => [
                    "position" => 'bottom'
                ],
                "connectSteps" => false,
                "colors" => ['#4374E0', '#53A8FB', '#F1CA3A', '#E49307'],
            )
        ));
        ?>
    </div>
</div>