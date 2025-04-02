<h1 class='title'>Row Oriented Data</h1>
<?php
$data = [
    ['data1', 'data2','data3'],
    [30, 200, 300],
    [20, 130, 200],
    [50,  90, 160],
    [40, 240, 400],
    [60, 130, 250],
    [50, 220, 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
        'data3'
    )
));
