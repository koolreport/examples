<h1 class='title'>Chart Size</h1>
<div style="display: flex;justify-content: center;">
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
            'sample'
        ),
        "options" => array(
            "size" => array(
                "height" => 240,
                "width" => 480
            )
        )
    ));
    ?>
</div>