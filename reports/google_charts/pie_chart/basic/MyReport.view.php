<?php

use \koolreport\widgets\google\PieChart;

$data = [
    ['Task', 'Hours per Day'],
    ['Work',     11],
    ['Eat',      2],
    ['Commute',  2],
    ['Watch TV', 2],
    ['Sleep',    7]
];

?>
<div class="report-content">
    <div class="text-center">
        <h1>Basic</h1>
    </div>

    <div style="margin-bottom:50px;">
        <?php
        PieChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'Task',
                'Hours per Day'
            ),
            "options" => array(
                "title" => 'My Daily Activities'
            )
        ));
        ?>
    </div>

</div>