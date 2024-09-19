<div id="report_render" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
    <?php

    $options = [
        ["mode" => 'index', "intersect" => true,],
        ["mode" => 'index', "intersect" => false,],
        ["mode" => 'dataset', "intersect" => true,],
        ["mode" => 'dataset', "intersect" => false,],
        ["mode" => 'point', "intersect" => true,],
        ["mode" => 'point', "intersect" => false,],
        ["mode" => 'nearest', "intersect" => true,],
        ["mode" => 'nearest', "intersect" => false,],
        ["mode" => 'x', "intersect" => true],
        ["mode" => 'x', "intersect" => false],
        ["mode" => 'y', "intersect" => true],
        ["mode" => 'y', "intersect" => false]
    ];

    $data = [
        ['month' => 'January', 'My First dataset' => 10, 'My Second dataset' => 7],
        ['month' => 'February', 'My First dataset' => 30, 'My Second dataset' => 49],
        ['month' => 'March', 'My First dataset' => 46, 'My Second dataset' => 46],
        ['month' => 'April', 'My First dataset' => 2, 'My Second dataset' => 13],
        ['month' => 'May', 'My First dataset' => 8, 'My Second dataset' => 25],
        ['month' => 'June', 'My First dataset' => 50, 'My Second dataset' => 30],
        ['month' => 'July', 'My First dataset' => 0, 'My Second dataset' => 22],
    ];
    for ($i = 0; $i < count($options); $i++) {
    ?>
        <div style="width:500px;margin-left: 40px;margin-right: 40px;margin-bottom: 40px">
            <?php
            \koolreport\chartjs\LineChart::create(array(
                'dataSource' => $data,
                'columns' => array(
                    "month",
                    "My First dataset" => array(
                        "backgroundColor" => 'rgb(255, 99, 132)',
                        "borderColor" => 'rgb(255, 99, 132)',
                        'fill' => false
                    ),
                    "My Second dataset" => array(
                        "backgroundColor" => 'rgb(54, 162, 235)',
                        "borderColor" => 'rgb(54, 162, 235)',
                        'fill' => false
                    )
                ),
                "options" => array(
                    "responsive" => true,
                    "title" => array(
                        "display" => true,
                        "text" => 'Mode: ' . $options[$i]['mode'] . ', intersect = ' . json_encode($options[$i]['intersect'])
                    ),
                    "tooltips" => array(
                        "mode" => $options[$i]['mode'],
                        "intersect" => $options[$i]['intersect']
                    ),
                    "hover" => array(
                        "mode" => $options[$i]['mode'],
                        "intersect" => $options[$i]['intersect']
                    )
                )
            ));
            ?>
        </div>
    <?php
    }
    ?>
</div>