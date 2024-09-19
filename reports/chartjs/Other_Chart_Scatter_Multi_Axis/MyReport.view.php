<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $datas = [
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
        ["FirstX" => randomScalingFactor(), "FirstY" => randomScalingFactor(), "SecondX" => randomScalingFactor(), "SecondY" => randomScalingFactor()],
    ];

    \koolreport\chartjs\ScatterChart::create(array(
        'dataSource' => $datas,
        "series" => array(
            array(
                "FirstX", "FirstY",
                array(
                    "label" => "My First dataset",
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)',
                    "xAxisID" => "x-axis-1",
                    "yAxisID" => "y-axis-1"
                )
            ),
            array(
                "SecondX", "SecondY",
                array(
                    "label" => "My Second dataset",
                    "backgroundColor" => 'rgba(54, 162, 235, 0.5)',
                    "borderColor" => 'rgb(54, 162, 235)',
                    "xAxisID" => "x-axis-1",
                    "yAxisID" => "y-axis-2"
                )
            ),
        ),
        "options" => array(
            "responsive" => true,
            "hoverMode" => 'nearest',
            "intersect" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Scatter Chart - Multi Axis'
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "position" => 'bottom',
                        "id" => 'x-axis-1',
                        "gridLines" => array(
                            "zeroLineColor" => 'rgb(0,0,0,1)'
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "display" => true,
                        "position" => 'left',
                        "id" => 'y-axis-1'
                    ),
                    array(
                        "display" => true,
                        "position" => 'right',
                        "id" => 'y-axis-2',
                        "reverse" => true,
                        "gridLines" => array(
                            "drawOnChartArea" => false
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>