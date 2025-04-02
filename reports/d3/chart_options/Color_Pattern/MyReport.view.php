<h1 class='title'>Padding</h1>
<?php
$data = [
    ['data1' =>  30, 'data2' => 50, 'data3' => 130, 'data4' => 250, 'data5' => 430, 'data6' => 100],
    ['data1' => 200, 'data2' => 20, 'data3' => 220, 'data4' => 320, 'data5' => 500, 'data6' => 120],
    ['data1' => 100, 'data2' => 10, 'data3' => 140, 'data4' => 210, 'data5' => 400, 'data6' => 310],
    ['data1' => 400, 'data2' => 40, 'data3' => 200, 'data4' => 240, 'data5' => 280, 'data6' => 340],
    ['data1' => 150, 'data2' => 15, 'data3' => 250, 'data4' => 215, 'data5' => 290, 'data6' => 415],
    ['data1' => 250, 'data2' => 25, 'data3' => 450, 'data4' => 225, 'data5' => 350, 'data6' => 225]
];

\koolreport\d3\LineChart::create(array(
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
        "color" => array(
            "pattern" => array('#1f77b4', '#aec7e8', '#ff7f0e', '#ffbb78', '#2ca02c', '#98df8a', '#d62728', '#ff9896', '#9467bd', '#c5b0d5', '#8c564b', '#c49c94', '#e377c2', '#f7b6d2', '#7f7f7f', '#c7c7c7', '#bcbd22', '#dbdb8d', '#17becf', '#9edae5')
        )
    )
));
