<div id="report_render" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $options = [
        ["legendPosition" => "top", "rgb" => "rgb(255, 99, 132)", 'rgba' => 'rgba(255, 99, 132, 0.5)'],
        ["legendPosition" => "right", "rgb" => "rgb(54, 162, 235)", 'rgba' => 'rgba(54, 162, 235, 0.5)'],
        ["legendPosition" => "bottom", "rgb" => "rgb(75, 192, 192)", 'rgba' => 'rgba(75, 192, 192, 0.5)'],
        ["legendPosition" => "left", "rgb" => "rgb(255, 205, 86)", 'rgba' => 'rgba(255, 205, 86, 0.5)'],
    ];

    $data = [
        ['month' => 'January', 'My First dataset' => randomScalingFactor()],
        ['month' => 'February', 'My First dataset' => randomScalingFactor()],
        ['month' => 'March', 'My First dataset' => randomScalingFactor()],
        ['month' => 'April', 'My First dataset' => randomScalingFactor()],
        ['month' => 'May', 'My First dataset' => randomScalingFactor()],
        ['month' => 'June', 'My First dataset' => randomScalingFactor()],
        ['month' => 'July', 'My First dataset' => randomScalingFactor()]
    ];
    for ($i = 0; $i < count($options); $i++) {
    ?>
        <div style="width:500px;margin-left: 40px;margin-right: 40px;">
            <?php
            \koolreport\chartjs\LineChart::create(array(
                'dataSource' => $data,
                'columns' => array(
                    "month",
                    "My First dataset" => array(
                        "backgroundColor" => $options[$i]['rgba'],
                        "borderColor" => $options[$i]['rgb'],
                        "borderWidth" => 1,
                        "fill"=> true
                    )
                ),
                "options" => array(
                    "responsive" => true,
                    "title" => array(
                        "display" => true,
                        "text" => 'Legend Position: ' . $options[$i]['legendPosition']
                    ),
                    "legend" => array(
                        "position" => $options[$i]['legendPosition']
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
                                "display" => true,
                                "scaleLabel" => array(
                                    "display" => true,
                                    "labelString" => 'Value'
                                )
                            )
                        )
                    )
                )
            ));
            ?>
        </div>
    <?php
    }
    ?>
</div>