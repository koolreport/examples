<h1 class='title'>X Axis Tick Fitting</h1>
<?php
$data = [
    ['x' => '2013-10-31', 'sample' => 30],
    ['x' => '2013-12-31', 'sample' => 100],
    ['x' => '2014-01-31', 'sample' => 400],
    ['x' => '2014-02-28', 'sample' => 150],

];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'x',
        'sample'
    ),
    "options" => array(
        "axis" => array(
            "x" => array(
                "type" => 'timeseries',
                "tick" => array(
                    "fit" => true,
                    "format" => '%e %b %y'
                )
            )
        )
    )
));
