<h1 class='title'>Optional Y Grid Lines</h1>
<?php
$data = [
    ['sample' =>  30, 'sample2' => 1300],
    ['sample' => 200, 'sample2' => 1200],
    ['sample' => 100, 'sample2' => 1100],
    ['sample' => 400, 'sample2' => 1400],
    ['sample' => 150, 'sample2' => 1500],
    ['sample' => 250, 'sample2' => 1250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
        'sample2'
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "sample2" => 'y2'
            )
        ),
        "axis" => array(
            "y2" => array(
                "show" => true
            )
        ),
        "grid" => array(
            "y" => array(
                "lines" => array(
                    array(
                        "value" => 50,
                        "text" => 'Label 50  for  y'
                    ),
                    array(
                        "value" => 1300,
                        "text" => 'Label 1300 for y2',
                        "axis" => 'y2',
                        "position" => 'start'
                    ),
                    array(
                        "value" => 350,
                        "text" => 'Label 350 for y',
                        "position" => 'middle'
                    )
                )
            )
        )
    )
));
