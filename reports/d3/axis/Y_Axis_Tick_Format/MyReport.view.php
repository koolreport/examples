<h1 class='title'>Y Axis Tick Format</h1>
<?php
$data = [
    ['sample' => 30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 2500]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample'
    ),
    "options" => array(
        "axis" => array(
            "y" => array(
                "tick" => array(
                    "format" => "function (d) { return \"$\" + d; }"
                )
            )
        )
    )
));
