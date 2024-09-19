<div id="report_render">
    <?php
    $yLabels = ['', 'Request Added', 'Request Viewed', 'Request Accepted', 'Request Solved', 'Solving Confirmed'];
    $data = [
        ['xLabels' => 'January', 'My First dataset' => ''],
        ['xLabels' => 'February', 'My First dataset' => 'Request Added'],
        ['xLabels' => 'March', 'My First dataset' => 'Request Added'],
        ['xLabels' => 'April', 'My First dataset' => 'Request Added'],
        ['xLabels' => 'May', 'My First dataset' => 'Request Viewed'],
        ['xLabels' => 'June', 'My First dataset' => 'Request Viewed'],
        ['xLabels' => 'July', 'My First dataset' => 'Request Viewed']
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "xLabels",
            "My First dataset" => array(
                "fill" => false,
                "backgroundColor" => 'rgb(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)'
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart with Non Numeric Y Axis'
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Month'
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "type" => 'category',
                        "labels" => $yLabels,
                        "position" => 'left',
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Request State'
                        ),
                        "ticks" => array(
                            "reverse" => true,
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>