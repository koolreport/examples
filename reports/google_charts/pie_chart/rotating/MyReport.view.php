<?php

use \koolreport\widgets\google\PieChart;

$data = [
    ['Language', 'Speakers (in millions)'],
    ['German',  5.85],
    ['French',  1.66],
    ['Italian', 0.316],
    ['Romansh', 0.0791]
];

?>
<div class="report-content">
    <div class="text-center">
        <h1>Rotating</h1>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        PieChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Language',
                'Speakers (in millions)'
            ),
            "options" => array(
                "legend" => 'none',
                "pieSliceText" => 'label',
                "title" => 'Swiss Language Use (100 degree rotation)',
                "pieStartAngle" => 100,
            )
        ));
        ?>
    </div>

</div>