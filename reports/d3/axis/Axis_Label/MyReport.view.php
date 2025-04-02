<h1 class='title'>Axis Label</h1>
<?php
$data = [
    ['sample' =>  30, 'sample2' => 130],
    ['sample' => 200, 'sample2' => 300],
    ['sample' => 100, 'sample2' => 200],
    ['sample' => 400, 'sample2' => 500],
    ['sample' => 150, 'sample2' => 250],
    ['sample' => 250, 'sample2' => 350]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
        'sample2'
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "sample2" => 'y2'
            )
        ),
        "axis" => array(
            "x" => array(
                'label' => 'X Label'
            ),
            "y" => array(
                'label' => 'Y Label',
            ),
            "y2" => array(
                "show" => true,
                "label" => "Y2 Label"
            )
        )
    )
));
