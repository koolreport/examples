<h1 class='title'>Grid Lines</h1>
<?php
$data = [
    ['sample' =>  30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 120],
    ['sample' => 200]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
    ),
    "options" => array(
        "grid" => array(
            "x" => array(
                "show" => true
            ),
            "y" => array(
                "show" => true
            )
        )
    )
));
