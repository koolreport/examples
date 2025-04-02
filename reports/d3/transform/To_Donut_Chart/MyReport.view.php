<h1 class='title'>To Donut Chart</h1>
<?php
$data = [
    ['data1' =>  30, 'data2' => 130],
    ['data1' => 200, 'data2' => 100],
    ['data1' => 100, 'data2' => 140],
    ['data1' => 400, 'data2' => 200],
    ['data1' => 150, 'data2' => 150],
    ['data1' => 250, 'data2' =>  50]
];

if (!isset($_POST['command'])) {
    $_SESSION['types'] = array();
}

if (isset($_POST['command']) && $_POST['command'] === 'second') {
    $_SESSION['types'] = array(
        "data1" => 'donut',
        "data2" => 'donut'
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'third') {
    $_SESSION['types'] = array();
}

if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
    $_SESSION['types'] = array(
        "data1" => 'pie',
        "data2" => 'pie'
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
    $_SESSION['types'] = array(
        "data1" => 'donut',
        "data2" => 'donut'
    );
}

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
    ),
    "options" => array(
        "data" => array(
            "types" => $_SESSION['types']
        )
    )
));
