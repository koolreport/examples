<h1 class='title'>Rotate X Axis Tick Text</h1>
<?php
$data = [
    ['x' =>  'www.somesitename1.com', 'pv' =>  90],
    ['x' =>  'www.somesitename2.com', 'pv' => 100],
    ['x' =>  'www.somesitename3.com', 'pv' => 140],
    ['x' =>  'www.somesitename4.com', 'pv' => 200],
    ['x' =>  'www.somesitename5.com', 'pv' => 100],
    ['x' =>  'www.somesitename6.com', 'pv' => 400],
    ['x' =>  'www.somesitename7.com', 'pv' =>  90],
    ['x' =>  'www.somesitename8.com', 'pv' => 100],
    ['x' =>  'www.somesitename9.com', 'pv' => 140],
    ['x' => 'www.somesitename10.com', 'pv' => 200],
    ['x' => 'www.somesitename11.com', 'pv' => 100],
    ['x' => 'www.somesitename12.com', 'pv' => 400]
];

\koolreport\d3\ColumnChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'x',
        'pv'
    ),
    "options" => array(
        "data" => array(
            'x' => 'x',
        ),
        "axis" => array(
            "x" => array(
                "type" => 'category',
                "tick" => array(
                    "rotate" => 75,
                    "multiline" => false
                ),
                "height" => 130
            )
        )
    )
));
