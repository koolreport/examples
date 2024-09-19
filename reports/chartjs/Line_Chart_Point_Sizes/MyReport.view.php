<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'February',  'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
        ['month' => 'January',   'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
        ['month' => 'March',     'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
        ['month' => 'April',     'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
        ['month' => 'May',       'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
        ['month' => 'June',      'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
        ['month' => 'July',      'dataset - big points' => randomScalingFactor(), 'dataset - individual point sizes' => randomScalingFactor(), 'dataset - large pointHoverRadius' => randomScalingFactor(), 'dataset - large pointHitRadius' => randomScalingFactor()],
    ];

    \koolreport\chartjs\LineChart::create(
        array(
            'dataSource' => $data,
            'columns' => array(
                'month',
                'dataset - big points' => array(
                    "backgroundColor" => 'rgb(255, 99, 132)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "fill" => false,
                    "borderDash" => [5, 5],
                    "pointRadius" => 15,
                    "pointHoverRadius" => 10
                ),
                'dataset - individual point sizes' => array(
                    "borderDash" => [5, 5],
                    "backgroundColor" => 'rgb(54, 162, 235)',
                    "borderColor" => 'rgb(54, 162, 235)',
                    "fill" => false,
                    "pointRadius" => [2, 4, 6, 18, 0, 12, 20]
                ),
                'dataset - large pointHoverRadius' => array(
                    "fill" => false,
                    "backgroundColor" => 'rgb(75, 192, 192)',
                    "borderColor" => 'rgb(75, 192, 192)',
                    "pointHoverRadius" => 30
                ),
                "dataset - large pointHitRadius" => array(
                    "fill" => false,
                    "backgroundColor" => 'rgb(255, 205, 86)',
                    "borderColor" => 'rgb(255, 205, 86)',
                    "pointHoverRadius" => 20
                )
            ),
            "options" => array(
                "responsive" => true,
                "legend" => array(
                    "position" => "bottom",
                ),
                "hover" => array(
                    "mode" => 'index',
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
                ),
                "title" => array(
                    "display" => true,
                    "text" => "Chart.js Line Chart - Different point sizes"
                )
            )
        )
    );
    ?>
</div>
