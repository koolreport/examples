<?php

use \koolreport\widgets\google\LineChart;

$data = [
    ['Year', 'Sales', 'Expenses'],
    ['2004',  1000,      400],
    ['2005',  1170,      460],
    ['2006',  660,       1120],
    ['2007',  1030,      540]
];

?>
<div class="report-content">
    <div class="text-center">
        <h1>Custom Axis</h1>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        LineChart::create(array(
            "title" => "Company Performance",
            "dataSource" => $data,
            "columns" => array(
                'Year',
                'Sales',
                'Expenses'
            ),
            "options" => array(
                "hAxis" => [
                    "title" => 'Year',
                    "textStyle" => [
                        "color" => '#01579b',
                        "fontSize" => 20,
                        "fontName" => 'Arial',
                        "bold" => true,
                        "italic" => true
                    ],
                    "titleTextStyle" => [
                        "color" => '#01579b',
                        "fontSize" => 16,
                        "fontName" => 'Arial',
                        "bold" => false,
                        "italic" => true
                    ]
                ],
                "vAxis" => [
                    "title" => 'Values',
                    "textStyle" => [
                        "color" => '#1a237e',
                        "fontSize" => 24,
                        "bold" => true
                    ],
                    "titleTextStyle" => [
                        "color" => '#1a237e',
                        "fontSize" => 24,
                        "bold" => true
                    ]
                ],
                "colors" => ['#a52714', '#097138']
            )
        ));
        ?>
    </div>

</div>