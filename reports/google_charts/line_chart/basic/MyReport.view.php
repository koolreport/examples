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
        <h1>Basic</h1>
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
            )
        ));
        ?>
    </div>

</div>