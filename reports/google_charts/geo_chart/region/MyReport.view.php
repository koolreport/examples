<?php

use \koolreport\widgets\google\GeoChart;

$data = [
    ['Country', 'Popularity'],
    ['Germany', 200],
    ['United States', 300],
    ['Brazil', 400],
    ['Canada', 500],
    ['France', 600],
    ['RU', 700]
];
?>
<div class="report-container">
    <div class="text-center">
        <h1>Region</h1>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        GeoChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "Country",
                "Popularity"
            ),
        ));
        ?>
    </div>
</div>