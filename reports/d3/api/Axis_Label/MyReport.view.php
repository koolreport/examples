<h1 class='title'>Axis Label</h1>
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
    $_SESSION['yLabel'] = 'Y Axis Label';
    $_SESSION['y2Label'] = 'Y2 Axis Label';
}

if (isset($_POST['command']) && $_POST['command'] === 'second') {
    $_SESSION['yLabel'] = 'Y Axis Label';
    $_SESSION['y2Label'] = 'New Y2 Axis Label';
}

if (isset($_POST['command']) && $_POST['command'] === 'third') {
    $_SESSION['yLabel'] = 'New Y Axis Label';
    $_SESSION['y2Label'] = 'New Y2 Axis Label Again';
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
            "y" => array(
                "label" => $_SESSION['yLabel']
            ),
            "y2" => array(
                "show" => true,
                "label" => $_SESSION['y2Label']
            )
        )
    )
));
