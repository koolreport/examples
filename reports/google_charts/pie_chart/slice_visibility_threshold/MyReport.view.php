<?php

use \koolreport\widgets\google\PieChart;

$data = [
    ['Pizza', 'Populartiy'],
    ['Pepperoni', 33],
    ['Hawaiian', 26],
    ['Mushroom', 22],
    ['Sausage', 10], // Below limit.
    ['Anchovies', 9] // Below limit.
];

?>
<div class="report-content">
    <div class="text-center">
        <h1>Slice Visibility Threshold</h1>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        PieChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Pizza',
                'Populartiy'
            ),
            "options" => array(
                "title" => 'Popularity of Types of Pizza',
                "sliceVisibilityThreshold" => .2
            )
        ));
        ?>
    </div>

</div>