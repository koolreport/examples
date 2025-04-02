<h1 class='title'>Multiple XY Line Chart</h1>
<?php

$data = [
    ['x1' => '10', 'x2' => '30', 'data1' => 30, 'data2' => 20],
    ['x1' => '30', 'x2' => '50', 'data1' => 200, 'data2' => 180],
    ['x1' => '45', 'x2' => '75', 'data1' => 100, 'data2' => 240],
    ['x1' => '50', 'x2' => '100', 'data1' => 400, 'data2' => 100],
    ['x1' => '70', 'x2' => '120', 'data1' => 150, 'data2' => 190],
    ['x1' => '100', 'x2' => null, 'data1' => 250, 'data2' => null]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1' => array(
            // 'xs' => 'x1'
        ),
        'data2' => array(
            // 'xs' => 'x2'
        ),
        'x1', 'x2'
    ),
    "options" => [
        'data' => [
            // 'json' => null,
            // 'keys' => null,
            // 'keys' => [
            //     'value' => ['x1', 'x2', 'data1', 'data2']
            // ],
            'xs' => array(
                'data1' => 'x1',
                'data2' => 'x2',
            ),
            // 'columns' => [
            //     ['x1', 10, 30, 45, 50, 70, 100],
            //     ['x2', 30, 50, 75, 100, 120],
            //     ['data1', 30, 200, 100, 400, 150, 250],
            //     ['data2', 20, 180, 240, 100, 190]
            // ]
        ],
        // 'axis' => null,
        // 'cKeys' => null,
        // 'fv' => null,
    ],
));

