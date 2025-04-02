    <h1 class="title">Category Axis</h1>
    <?php
    $data = [
        ['data1' => 30],
        ['data1' => 200],
        ['data1' => 100],
        ['data1' => 400],
        ['data1' => 150],
        ['data1' => 250],
        ['data1' => 50],
        ['data1' => 100],
        ['data1' => 250]
    ];

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $data,
        "columns" => array(
            'data1'
        ),
        "options" => array(
            "axis" => array(
                "x" => array(
                    "type" => 'category',
                    "categories" => array(
                        'cat1',
                        'cat2',
                        'cat3',
                        'cat4',
                        'cat5',
                        'cat6',
                        'cat7',
                        'cat8',
                        'cat9'
                    )
                )
            )
        )
    ));
    ?>