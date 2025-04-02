<h1 class='title'>Data Label</h1>
<?php
$data = [
    ['data1' =>   30, 'data2' =>  -50, 'data3' => -100],
    ['data1' => -200, 'data2' =>  150, 'data3' =>  100],
    ['data1' => -100, 'data2' => -150, 'data3' =>  -40],
    ['data1' =>  400, 'data2' =>  150, 'data3' =>  100],
    ['data1' =>  150, 'data2' =>  -50, 'data3' => -150],
    ['data1' =>  250, 'data2' => -150, 'data3' =>  -50]
];

\koolreport\d3\ColumnChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
        'data3'
    ),
    "options" => array(
        "data" => array(
            "groups" => array(
                array(
                    "data1",
                    "data2"
                )
            ),
            "labels" => true
        ),
        "grid" => array(
            "y" => array(
                "lines" => array(
                    array(
                        "value" => 0
                    )
                )
            )
        )
    )
));
