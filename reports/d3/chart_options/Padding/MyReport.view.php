<h1 class='title'>Padding</h1>
    <?php
    $data = [
        ['sample' =>  30],
        ['sample' => 200],
        ['sample' => 100],
        ['sample' => 400],
        ['sample' => 150],
        ['sample' => 250000000000]
    ];

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $data,
        "columns" => array(
            'sample'
        ),
        "options" => array(
            "padding" => array(
                "top" => 40,
                "right" => 100,
                "bottom" => 40,
                "left" => 100
            )
        )
    ));