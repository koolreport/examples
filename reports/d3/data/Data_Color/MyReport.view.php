<h1 class='title'>Data Color</h1>
<?php
$data = [
    ['data1' => 30, 'data2' => 200, 'data3' => 300],
    ['data1' => 20, 'data2' => 130, 'data3' => 200],
    ['data1' => 50, 'data2' =>  90, 'data3' => 160],
    ['data1' => 40, 'data2' => 240, 'data3' => 400],
    ['data1' => 60, 'data2' => 130, 'data3' => 250],
    ['data1' => 50, 'data2' => 220, 'data3' => 250]
];

\koolreport\d3\ColumnChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
        'data3'
    ),
    "options" => array(
        "data" => array(
            "colors" => array(
                "data1" => '#ff0000',
                "data2" => '#00ff00',
                "data3" => '#0000ff'
            ),
            "color" => "function (color, d) {
                    return d.id && d.id === 'data3' ? d3.rgb(color).darker(d.value / 150) : color;
                }"
        )
    )
));
