<?php

use \koolreport\widgets\google\BubbleChart;

$data2 = [
    ['ID', 'X', 'Y', 'Temperature'],
    ['',   80,  167,      120],
    ['',   79,  136,      130],
    ['',   78,  184,      50],
    ['',   72,  278,      230],
    ['',   81,  200,      210],
    ['',   72,  170,      100],
    ['',   68,  477,      80]
];
?>
<div class="report-content">
    <div class="text-center">
        <h1>Color By Numbers</h1>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        BubbleChart::create(array(
            "title" => "Color By Numbers",
            "dataSource" => $data2,
            "columns" => array(
                'ID',
                'X',
                'Y',
                'Temperature'
            ),
            "options" => array(
                "colorAxis" => array(
                    "colors" => array(
                        'yellow',
                        'red'
                    )
                )
            )
        ));
        ?>
    </div>

</div>