<?php

use \koolreport\widgets\google\ScatterChart;

$height_weight_smokers = array(
    array("height", "weight", "smokers"),
    array(170, 82, 123),
    array(180, 91, 45),
    array(150, 60, 14),
    array(152, 55, 55),
    array(168, 65, 223),
    array(178, 67, 55),
    array(185, 46, 223),
    array(166, 77, 55),
    array(153, 50, 77),
    array(166, 44, 155),
);


$data2 = [
    ['Diameter', 'Age'],
    [8, 37],
    [4, 19.5],
    [11, 52],
    [4, 22],
    [3, 16.5],
    [6.5, 32.8],
    [14, 72]
]

?>
<div class="report-content">
    <div class="text-center">
        <h1>Custom Points</h1>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        ScatterChart::create(array(
            "title" => "Height vs Weight, Smokers on custom points",
            "dataSource" => $height_weight_smokers,
            "options" => array(
                "pointShape" => 'star',
                "pointSize" => 18
            )
        ));
        ?>
    </div>
</div>