<h1 class='title'>Simple XY Line Chart</h1>
<?php

$data = [
    ['x' => '30',  'data1' => 30,  'data2' => 130],
    ['x' => '50',  'data1' => 200, 'data2' => 300],
    ['x' => '100', 'data1' => 100, 'data2' => 200],
    ['x' => '230', 'data1' => 400, 'data2' => 300],
    ['x' => '300', 'data1' => 150, 'data2' => 250],
    ['x' => '310', 'data1' => 250, 'data2' => 450]
];

$series = array();
if (!isset($_POST['command'])) {
    $_SESSION['data'] = $data;
    $series = array('x' => array(
        'type' => '',
        'x' => 'x'
    ), 'data1', 'data2');
}

if (isset($_POST['command']) && $_POST['command'] === 'second') {
    $data1 = [100, 250, 150, 200, 100, 350];
    for ($i = 0; $i < count($_SESSION['data']); $i++) {
        $_SESSION['data'][$i]['data1'] = $data1[$i];
    }
    $series = array('x' => array(
        'type' => '',
        'x' => 'x'
    ), 'data1', 'data2');
}

if (isset($_POST['command']) && $_POST['command'] === 'third') {
    $data3 = [80, 150, 100, 180, 80, 150];
    for ($i = 0; $i < count($_SESSION['data']); $i++) {
        $_SESSION['data'][$i]['data3'] = $data3[$i];
    }
    $series = array('x' => array(
        'type' => '',
        'x' => 'x'
    ), 'data1', 'data2', 'data3');
}

if (isset($_POST['command']) && $_POST['command'] === 'final') {
    for ($i = 0; $i < count($_SESSION['data']); $i++) {
        array_splice($_SESSION['data'][$i], 2, 1);
    }
    $series = array('x' => array(
        'type' => '',
        'x' => 'x'
    ), 'data1', 'data3');
}


\koolreport\d3\LineChart::create(array(
    "dataSource" => $_SESSION['data'],
    "columns" => $series,
    "options" => array(
        "data" => array(
            'colors' => array(
                "data3" => '#2ca02c '
            )
        )
    )
));
