<h1 class='title'>Line Chart with Regions</h1>
<?php
$data = [
    ['data1' => 30, 'data2' => 50],
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
        'data2',
    ),
    "options" => array(
        "data" => array(
            "regions" => array(
                'data1' => array(
                    array(
                        'start' => 1,
                        'end' => 2,
                        'style' => 'dashed'
                    ),
                    array(
                        'start' => 3
                    )
                ),
                'data2' => array(
                    array(
                        'end' => 3
                    )
                )
            )
        )
    )
));
