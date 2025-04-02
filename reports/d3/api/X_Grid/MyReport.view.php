<h1 class='title'>X_Grid</h1>
<?php
$data = [
    ['sample' =>  30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250]
];

if (!isset($_POST['command'])) {
    $_SESSION['lines'] = array();
}

if (isset($_POST['command']) && $_POST['command'] === 'second') {
    $_SESSION['lines'] = array(
        array(
            "value" => 1,
            "text" => 'Label 1'
        ),
        array(
            "value" => 4,
            "text" => 'Label 4'
        )
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'third') {
    $_SESSION['lines'] = array(
        array(
            "value" => 2,
            "text" => 'Label 2'
        )
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
    $_SESSION['lines'] = array(
        array(
            "value" => 2,
            "text" => 'Label 2'
        ),
        array(
            "value" => 3,
            "text" => 'Label 3'
        )
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
    $_SESSION['lines'] = array(
        array(
            "value" => 3,
            "text" => 'Label 3'
        )
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'sixth') {
    $_SESSION['lines'] = array();
}

if (isset($_POST['command']) && $_POST['command'] === 'seventh') {
    $_SESSION['lines'] = array(
        array(
            "value" => 1,
            "text" => 'Label 1'
        ),
        array(
            "value" => 4,
            "text" => 'Label 4'
        )
    );
}

if (isset($_POST['command']) && $_POST['command'] === 'eighth') {
    $_SESSION['lines'] = array();
}

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
    ),
    "options" => array(
        "grid" => array(
            "x" => array(
                "lines" => $_SESSION['lines']
            )
        )
    )
));
