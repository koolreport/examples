<h1 class='title'>Axis Range</h1>
<?php
$data = [
    ['data1' =>  30, 'data2' => 50],
    ['data1' => 200, 'data2' => 20],
    ['data1' => 100, 'data2' => 10],
    ['data1' => 400, 'data2' => 40],
    ['data1' => 150, 'data2' => 15],
    ['data1' => 250, 'data2' => 25]
];

if (!isset($_POST['command'])) {
    $_SESSION['yAxisMax'] = "";
    $_SESSION['yAxisMin'] = "";
    $_SESSION['y2AxisMax'] = "";
    $_SESSION['y2AxisMin'] = "";
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'second') {
    $_SESSION['yAxisMax'] = 500;
    $_SESSION['yAxisMin'] = "";
    $_SESSION['y2AxisMax'] = 500;
    $_SESSION['y2AxisMin'] = "";
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'third') {
    $_SESSION['yAxisMax'] = 500;
    $_SESSION['yAxisMin'] = -500;
    $_SESSION['y2AxisMax'] = 500;
    $_SESSION['y2AxisMin'] = -500;
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
    $_SESSION['yAxisMax'] = 600;
    $_SESSION['yAxisMin'] = -500;
    $_SESSION['y2AxisMax'] = 100;
    $_SESSION['y2AxisMin'] = -500;
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
    $_SESSION['yAxisMax'] = 600;
    $_SESSION['yAxisMin'] = -600;
    $_SESSION['y2AxisMax'] = 100;
    $_SESSION['y2AxisMin'] = -100;
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'sixth') {
    $_SESSION['yAxisMax'] = 1000;
    $_SESSION['yAxisMin'] = -1000;
    $_SESSION['y2AxisMax'] = 1000;
    $_SESSION['y2AxisMin'] = -1000;
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'seventh') {
    $_SESSION['yAxisMax'] = 600;
    $_SESSION['yAxisMin'] = -100;
    $_SESSION['y2AxisMax'] = 100;
    $_SESSION['y2AxisMin'] = 0;
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

if (isset($_POST['command']) && $_POST['command'] === 'eighth') {
    $_SESSION['yAxisMax'] = 600;
    $_SESSION['yAxisMin'] = -100;
    $_SESSION['y2AxisMax'] = 100;
    $_SESSION['y2AxisMin'] = 0;
    $_SESSION['xAxisMax'] = 10;
    $_SESSION['xAxisMin'] = '';
}

if (isset($_POST['command']) && $_POST['command'] === 'ninth') {
    $_SESSION['yAxisMax'] = 600;
    $_SESSION['yAxisMin'] = -100;
    $_SESSION['y2AxisMax'] = 100;
    $_SESSION['y2AxisMin'] = 0;
    $_SESSION['xAxisMax'] = 10;
    $_SESSION['xAxisMin'] = -10;
}

if (isset($_POST['command']) && $_POST['command'] === 'tenth') {
    $_SESSION['yAxisMax'] = 600;
    $_SESSION['yAxisMin'] = -100;
    $_SESSION['y2AxisMax'] = 100;
    $_SESSION['y2AxisMin'] = 0;
    $_SESSION['xAxisMax'] = 5;
    $_SESSION['xAxisMin'] = 0;
}

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "data1" => 'y',
                "data2" => 'y2',
            ),
        ),
        "axis" => array(
            "x" => array(
                "max" => $_SESSION['xAxisMax'],
                "min" => $_SESSION['xAxisMin']
            ),
            "y" => array(
                "max" => $_SESSION['yAxisMax'],
                "min" => $_SESSION['yAxisMin']
            ),
            "y2" => array(
                "show" => true,
                "max" => $_SESSION['y2AxisMax'],
                "min" => $_SESSION['y2AxisMin']
            ),
        )
    )
));
