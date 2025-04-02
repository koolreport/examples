<h1 class='title'>Zoom</h1>
<?php
$data = [
    ['sample' => 30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 150],
    ['sample' => 200],
    ['sample' => 170],
    ['sample' => 240],
    ['sample' => 350],
    ['sample' => 150],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 150],
    ['sample' => 200],
    ['sample' => 170],
    ['sample' => 240],
    ['sample' => 100],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 150],
    ['sample' => 200],
    ['sample' => 170],
    ['sample' => 240],
    ['sample' => 30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250],
    ['sample' => 150],
    ['sample' => 200],
    ['sample' => 170],
    ['sample' => 240],
    ['sample' => 350],
    ['sample' => 150],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 350],
    ['sample' => 220],
    ['sample' => 250],
    ['sample' => 300],
    ['sample' => 270],
    ['sample' => 140],
    ['sample' => 150],
    ['sample' => 90],
    ['sample' => 150],
    ['sample' => 50],
    ['sample' => 120],
    ['sample' => 70],
    ['sample' => 40]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
    ),
    "options" => array(
        "zoom" => array(
            "enabled" => true
        )
    )
));
