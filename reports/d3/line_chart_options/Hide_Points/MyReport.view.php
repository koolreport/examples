<h1 class='title'>Hide points</h1>
<div style="display: flex;justify-content: center;">
    <?php
    $data = [
        ['data1' =>  30, 'data2'=> 50],
        ['data1' => 200, 'data2'=> 20],
        ['data1' => 100, 'data2'=> 10],
        ['data1' => 400, 'data2'=> 40],
        ['data1' => 150, 'data2'=> 15],
        ['data1' => 250, 'data2'=> 25]
    ];

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $data,
        "columns" => array(
            'data1'
        ),
        "options" => array(
            "point" => array(
                "show" => false
            )
        )
    ));
    ?>
</div>