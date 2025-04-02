<h1 class='title'>Optional X Grid Lines</h1>
<?php
$data = [
    ['sample' =>  30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
    ),
    "options" => array(
        "grid" => array(
            "x" => array(
                "lines" => array(
                    array(
                        "value" => 1,
                        "text" => 'Label 1'
                    ),
                    array(
                        "value" => 3,
                        "text" => 'Label 3',
                        "position" => 'middle'
                    ),
                    array(
                        "value" => 4.5,
                        "text" => 'Label 4.5',
                        "position" => 'start'
                    )
                )
            )
        )
    )
));
