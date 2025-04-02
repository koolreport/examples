<h1 class='title'>Tooltip Grouping</h1>
<?php
$data = [
    ['data1' =>  30, 'data2' => 50, 'data3' => 500],
    ['data1' => 200, 'data2' => 20, 'data3' => 320],
    ['data1' => 100, 'data2' => 10, 'data3' => 210],
    ['data1' => 400, 'data2' => 40, 'data3' => 340],
    ['data1' => 150, 'data2' => 15, 'data3' => 215],
    ['data1' => 250, 'data2' => 25, 'data3' => 125]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
        'data3'
    ),
    "options" => array(
        "tooltip" => array(
            "grouped" => false
        )
    )
));
