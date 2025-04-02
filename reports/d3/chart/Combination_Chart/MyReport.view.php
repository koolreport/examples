<h1 class='title'>Combination Chart</h1>
<?php
$data = [
    ['data1' => 30, 'data2' => 200, 'data3' => 300, 'data4' => 200, 'data5' => 130, 'data6' =>  90],
    ['data1' => 20, 'data2' => 130, 'data3' => 200, 'data4' => 130, 'data5' => 120, 'data6' =>  70],
    ['data1' => 50, 'data2' =>  90, 'data3' => 160, 'data4' =>  90, 'data5' => 150, 'data6' =>  20],
    ['data1' => 40, 'data2' => 240, 'data3' => 400, 'data4' => 240, 'data5' => 140, 'data6' =>  50],
    ['data1' => 60, 'data2' => 130, 'data3' => 250, 'data4' => 130, 'data5' => 160, 'data6' =>  60],
    ['data1' => 50, 'data2' => 220, 'data3' => 250, 'data4' => 220, 'data5' => 150, 'data6' => 120]
];

\koolreport\d3\ColumnChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
        'data3',
        'data4',
        'data5',
        'data6'
    ),
    "options" => array(
        "data" => array(
            "types" => array(
                "data3" => 'spline',
                "data4" => 'line',
                "data6" => 'area'
            ),
            "groups" => array(
                array(
                    'data1',
                    'data2'
                )
            )
        )
    )
));
