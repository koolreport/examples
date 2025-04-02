<h1 class='title'>Spline Chart</h1>
<?php
$data = [
    ['data1' => 30, 'data2' => 130],
    ['data1' => 200, 'data2' => 100],
    ['data1' => 100, 'data2' => 140],
    ['data1' => 400, 'data2' => 200],
    ['data1' => 150, 'data2' => 150],
    ['data1' => 250, 'data2' => 50]
];

\koolreport\d3\SplineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2'
    ),
));
