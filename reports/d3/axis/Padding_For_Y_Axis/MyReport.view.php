<h1 class='title'>Padding for Y Axis</h1>
<?php
$data = [
    ['data1' =>  30, 'data2' => 50],
    ['data1' => 200, 'data2' => 20],
    ['data1' => 100, 'data2' => 10],
    ['data1' => 400, 'data2' => 40],
    ['data1' => 150, 'data2' => 15],
    ['data1' => 250, 'data2' => 25]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2'
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "data1" => 'y',
                "data2" => 'y2'
            )
        ),
        "axis" => array(
            "y" => array(
                "padding" => array(
                    "top" => 200,
                    "bottom" => 0
                )
            ),
            "y2" => array(
                "padding" => array(
                    "top" => 100,
                    "bottom" => 100
                ),
                "show" => true
            )
        )
    )
));
