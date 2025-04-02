<h1 class='title'>X Axis Tick Count</h1>
<?php
$data = [
    ['x' => '2013-01-01', 'sample' => 30],
    ['x' => '2013-01-02', 'sample' => 200],
    ['x' => '2013-01-03', 'sample' => 100],
    ['x' => '2013-01-04', 'sample' => 400],
    ['x' => '2013-01-05', 'sample' => 150],
    ['x' => '2013-01-06', 'sample' => 250],
    ['x' => '2013-01-07', 'sample' => 30],
    ['x' => '2013-01-08', 'sample' => 200],
    ['x' => '2013-01-09', 'sample' => 100],
    ['x' => '2013-01-10', 'sample' => 400],
    ['x' => '2013-01-11', 'sample' => 150],
    ['x' => '2013-01-12', 'sample' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'x',
        'sample'
    ),
    "options" => array(
        "data" => array(
            "x" => 'x'
        ),
        "axis" => array(
            "x" => array(
                "type" => 'timeseries',
                "tick" => array(
                    "count" => 4,
                    "format" => '%Y-%m-%d'
                )
            )
        )
    )
));
