<h1 class='title'>X Axis Tick Culling</h1>
<?php
$data = [
    ['sample' => 30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample'
    ),
    "options" => array(
        "axis" => array(
            "x" => array(
                "type" => 'category',
                "tick" => array(
                    "culling" => array(
                        "max" => 4
                    )
                )
            )
        )
    )
));
