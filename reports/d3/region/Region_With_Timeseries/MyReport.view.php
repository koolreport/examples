<h1 class='title'>Region with Timeseries</h1>
<?php
$data = [
    ['date' => '2014-01-01', 'sampple' =>  30],
    ['date' => '2014-01-10', 'sampple' => 200],
    ['date' => '2014-01-20', 'sampple' => 100],
    ['date' => '2014-01-30', 'sampple' => 400],
    ['date' => '2014-02-01', 'sampple' => 150],
    ['date' =>         null, 'sampple' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'date',
        'sampple'
    ),
    "options" => array(
        "data" => array(
            "x" => 'date'
        ),
        "axis" => array(
            "x" => array(
                "type" => 'timeseries'
            )
        ),
        "regions" => array(
            array(
                "start" => '2014-01-05',
                "end" => '2014-01-10',
            ),
            array(
                "start" => "2014-01-15",
                "end" => "2014-01-20",
            ),
            array(
                "start" => 1390575600000,
                "end" => 1391007600000
            ),
        )
    )
));
