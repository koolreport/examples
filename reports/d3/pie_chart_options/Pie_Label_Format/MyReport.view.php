<h1 class='title'>Pie Label Format </h1>
<div style="display: flex;justify-content: center;">
    <?php
    $data = [
        ['label' =>  'data1', 'data' => 30],
        ['label' => 'data2', 'data' => 50],
    ];

    \koolreport\d3\PieChart::create(array(
        "dataSource" => $data,
        "columns" => array(
            'label',
            'data'
        ),
        "options" => array(
            "pie" => array(
                "label" => array(
                    "format" => "function(value, ratio, id){
                        return '$' + value;
                    }"
                )
            )
        )
    ));
    ?>
</div>