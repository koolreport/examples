<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'February',  'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
        ['month' => 'January',   'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
        ['month' => 'March',     'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
        ['month' => 'April',     'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
        ['month' => 'May',       'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
        ['month' => 'June',      'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
        ['month' => 'July',      'Unfilled' => randomScalingFactor(), 'Dashed' => randomScalingFactor(), 'Filled' => randomScalingFactor()],
    ];

    \koolreport\chartjs\LineChart::create(
        array(
            'dataSource' => $data,
            'columns' => array(
                'month',
                'Unfilled' => array(
                    "backgroundColor" => 'rgb(54, 162, 235)',
                    "borderColor" => 'rgb(54, 162, 235)',
                ),
                'Dashed' => array(
                    "borderDash" => [5, 5],
                    "backgroundColor" => 'rgb(75, 192, 192)',
                    "borderColor" => 'rgb(75, 192, 192)',
                ),
                'Filled' => array(
                    "fill" => true,
                    "backgroundColor" => 'rgb(255, 99, 132)',
                    "borderColor" => 'rgb(255, 99, 132)',
                )
            ),
            "options" => array(
                "responsive" => true,
                "title" => array(
                    "display" => true,
                    "text" => "Chart.js Line Chart"
                ),
                "tooltips" => array(
                    "mode" => 'index',
                    "intersect" => false,
                ),
                "hover" => array(
                    "mode" => 'nearest',
                    "intersect" => true,
                ),
                "scales" => array(
                    "xAxes" => array(
                        array(
                            "display" => true,
                            "scaleLabel" => array(
                                "display" => true,
                                "labelString" => "Month",
                            )
                        )
                    ),
                    "yAxes" => array(
                        array(
                            "display" => true,
                            "scaleLabel" => array(
                                "display" => true,
                                "labelString" => "Value"
                            )
                        )
                    )
                )

            )
        )
    );
    ?>
</div>