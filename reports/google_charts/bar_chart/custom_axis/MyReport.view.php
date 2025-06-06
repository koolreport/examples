<?php

use \koolreport\widgets\google\BarChart;

$data = [
    ['City', '2010 Population', '2000 Population'],
    ['New York City, NY', 8175000, 8008000],
    ['Los Angeles, CA', 3792000, 3694000],
    ['Chicago, IL', 2695000, 2896000],
    ['Houston, TX', 2099000, 1953000],
    ['Philadelphia, PA', 1526000, 1517000]
];
?>
<div class="report-content">
    <div class="text-center">
        <h1>Custom Axis</h1>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        BarChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'City',
                '2010 Population',
                '2000 Population'
            ),
            "options" => array(
                "title" => "Population of Largest U.S. Cities",
                "hAxis" => [
                    "title" => 'Total Population',
                    "minValue" => 0,
                    "textStyle" => [
                        "bold" => true,
                        "fontSize" => 12,
                        "color" => '#4d4d4d'
                    ],
                    "titleTextStyle" => [
                        "bold" => true,
                        "fontSize" => 18,
                        "color" => '#4d4d4d'
                    ]
                ],
                "vAxis" => [
                    "title" => 'City',
                    "textStyle" => [
                        "fontSize" => 14,
                        "bold" => true,
                        "color" => '#848484'
                    ],
                    "titleTextStyle" => [
                        "fontSize" => 14,
                        "bold" => true,
                        "color" => '#848484'
                    ]
                ]
            )
        ));
        ?>
    </div>

</div>