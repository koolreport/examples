<h1 class='title'>X Axis Timezone</h1>
<?php
$data = [
    ['x' => '2010', 'data1' =>  30, 'data2' => 130],
    ['x' => '2011', 'data1' => 200, 'data2' => 340],
    ['x' => '2012', 'data1' => 100, 'data2' => 200],
    ['x' => '2013', 'data1' => 400, 'data2' => 500],
    ['x' => '2014', 'data1' => 150, 'data2' => 250],
    ['x' => '2015', 'data1' => 250, 'data2' => 350]

];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'x',
        'data1',
        'data2'
    ),
    "options" => array(
        "data" => array(
            'x' => 'x',
            'xFormat' => '%Y'
        ),
        "axis" => array(
            "x" => array(
                "type" => 'timeseries',
                "localtime" => false,
                "tick" => array(
                    "format" => '%Y-%m-%d %H:%M:%S'
                )
            )
        )
    )
));
