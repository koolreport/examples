<h1 class='title'>Data Name</h1>
<?php
$data = [
    ['data1' =>  30, 'data2' => 50],
    ['data1' => 200, 'data2' => 20],
    ['data1' => 100, 'data2' => 10],
    ['data1' => 400, 'data2' => 40],
    ['data1' => 150, 'data2' => 15],
    ['data1' => 250, 'data2' => 25]
];

if(!isset($_POST['command'])){
    $_SESSION['data1'] = 'Name 1';
    $_SESSION['data2'] = 'Name 2';
}

if(isset($_POST['command']) && $_POST['command'] === 'second'){
    $_SESSION['data1'] = 'New name for data1';
    $_SESSION['data2'] = 'New name for data2';
}

if(isset($_POST['command']) && $_POST['command'] === 'third'){
    $_SESSION['data1'] = 'New name for data1 again';
    $_SESSION['data2'] = 'New name for data2';
}

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
    ),
    "options" => array(
        "data" => array(
            "names" => array(
                "data1" => $_SESSION['data1'],
                "data2" => $_SESSION['data2'],
            )
        )
    )
));

