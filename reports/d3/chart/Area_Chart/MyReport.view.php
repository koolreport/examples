<h1 class='title'>Area Chart</h1>
<?php
$data = [
    ['data1' => 300, 'data2' => 130],
    ['data1' => 350, 'data2' => 100],
    ['data1' => 300, 'data2' => 140],
    ['data1' =>   0, 'data2' => 200],
    ['data1' =>   0, 'data2' => 150],
    ['data1' =>   0, 'data2' =>  50]
];

\koolreport\d3\AreaChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2'
    ),
    "options" => array(
        "data" => array(
            "types" => array(
                "data1" => 'area',
                "data2" => 'area-spline'
            )
        )
    )
));
