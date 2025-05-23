<h1 class='title'>Range for Y Axis</h1>
<?php
$data = [
    ['sample' =>  30],
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
            "y" => array(
                "max" => 400,
                "min" => -400
            )
        )
    )
));
