<h1 class='title'>Axis Label Position</h1>
<?php
$data = [
    ['sample1' =>  30, 'sample2' => 430],
    ['sample1' => 200, 'sample2' => 300],
    ['sample1' => 100, 'sample2' => 500],
    ['sample1' => 400, 'sample2' => 400],
    ['sample1' => 150, 'sample2' => 650],
    ['sample1' => 250, 'sample2' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample1',
        'sample2'
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "sample1" => 'y',
                "sample2" => 'y2'
            )
        ),
        "axis" => array(
            "x" => array(
                'label' => array(
                    "text" => 'X Label',
                    'position' => 'outer-center'
                )
            ),
            "y" => array(
                'label' => array(
                    "text" => 'Y Label',
                    'position' => 'outer-middle'
                )
            ),
            "y2" => array(
                "show" => true,
                "label" => array(
                    "text" => 'Y2 Label',
                    'position' => 'outer-middle'
                )
            )
        )
    )
));
