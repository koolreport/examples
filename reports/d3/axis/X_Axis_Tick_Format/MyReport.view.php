<h1 class='title'>X Axis Tick Format</h1>
<?php
$data = [
    ['x' => '2010-01-01', 'sample' => 30],
    ['x' => '2011-01-01', 'sample' => 200],
    ['x' => '2012-01-01', 'sample' => 100],
    ['x' => '2013-01-01', 'sample' => 400],
    ['x' => '2014-01-01', 'sample' => 150],
    ['x' => '2015-01-01', 'sample' => 250]
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
                    "format" => '%Y'
                )
            )
        )
    )
));
