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

if (!isset($_POST['command'])) {
    $_SESSION['color'] = "function (color) {
        return color;
    }";
}

if (isset($_POST['command']) && $_POST['command'] === 'second') {
    $_SESSION['color'] = "function (color) {
        return d3.rgb(color).darker(1);
    }";
}

if (isset($_POST['command']) && $_POST['command'] === 'third') {
    $_SESSION['color'] = "function (color) {
        return d3.rgb(color).darker(2);
    }";
}

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
                "data3" => '#0000ff',
            ),
            "labels" => true,
            "color" => $_SESSION['color']
        )
    )
));
