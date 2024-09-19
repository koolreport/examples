<div>
    <?php
    function randomScalingFactor()
    {
        return mt_rand(0, 100);
    }

    $dataPoints = [0, 20, 20, 60, 60, 120, 'NAN', 180, 120, 125, 105, 110, 170];

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        for ($i = 0; $i < count($dataPoints); $i++) {
            $dataPoints[$i] = mt_rand() < 0.05 ? NAN : randomScalingFactor();;
        }
    }

    $data = [
        ['labels' => '0',  'Cubic interpolation (monotone)' => $dataPoints[0],  'Cubic interpolation (default)' => $dataPoints[0],  'Linear interpolation' => $dataPoints[0]],
        ['labels' => '1',  'Cubic interpolation (monotone)' => $dataPoints[1],  'Cubic interpolation (default)' => $dataPoints[1],  'Linear interpolation' => $dataPoints[1]],
        ['labels' => '2',  'Cubic interpolation (monotone)' => $dataPoints[2],  'Cubic interpolation (default)' => $dataPoints[2],  'Linear interpolation' => $dataPoints[2]],
        ['labels' => '3',  'Cubic interpolation (monotone)' => $dataPoints[3],  'Cubic interpolation (default)' => $dataPoints[3],  'Linear interpolation' => $dataPoints[3]],
        ['labels' => '4',  'Cubic interpolation (monotone)' => $dataPoints[4],  'Cubic interpolation (default)' => $dataPoints[4],  'Linear interpolation' => $dataPoints[4]],
        ['labels' => '5',  'Cubic interpolation (monotone)' => $dataPoints[5],  'Cubic interpolation (default)' => $dataPoints[5],  'Linear interpolation' => $dataPoints[5]],
        ['labels' => '6',  'Cubic interpolation (monotone)' => $dataPoints[6],  'Cubic interpolation (default)' => $dataPoints[6],  'Linear interpolation' => $dataPoints[6]],
        ['labels' => '7',  'Cubic interpolation (monotone)' => $dataPoints[7],  'Cubic interpolation (default)' => $dataPoints[7],  'Linear interpolation' => $dataPoints[7]],
        ['labels' => '8',  'Cubic interpolation (monotone)' => $dataPoints[8],  'Cubic interpolation (default)' => $dataPoints[8],  'Linear interpolation' => $dataPoints[8]],
        ['labels' => '9',  'Cubic interpolation (monotone)' => $dataPoints[9],  'Cubic interpolation (default)' => $dataPoints[9],  'Linear interpolation' => $dataPoints[9]],
        ['labels' => '10', 'Cubic interpolation (monotone)' => $dataPoints[10], 'Cubic interpolation (default)' => $dataPoints[10], 'Linear interpolation' => $dataPoints[10]],
        ['labels' => '11', 'Cubic interpolation (monotone)' => $dataPoints[11], 'Cubic interpolation (default)' => $dataPoints[11], 'Linear interpolation' => $dataPoints[11]],
        ['labels' => '12', 'Cubic interpolation (monotone)' => $dataPoints[12], 'Cubic interpolation (default)' => $dataPoints[12], 'Linear interpolation' => $dataPoints[12]],

    ];

    \koolreport\chartjs\LineChart::create(
        array(
            'dataSource' => $data,
            'columns' => array(
                'labels',
                'Cubic interpolation (monotone)' => array(
                    "borderColor" => 'rgb(255, 99, 132)',
                    "backgroundColor" => 'rgba(0, 0, 0, 0)',
                    "fill" => false,
                    "cubicInterpolationMode" => 'monotone'
                ),
                'Cubic interpolation (default)' => array(
                    "borderColor" => 'rgb(54, 162, 235)',
                    "backgroundColor" => 'rgba(0, 0, 0, 0)',
                    "fill" => false
                ),
                'Linear interpolation' => array(
                    "borderColor" => 'rgb(75, 192, 192)',
                    "backgroundColor" => 'rgba(0, 0, 0, 0)',
                    "fill" => false,
                    "lineTension" => 0
                )
            ),
            "options" => array(
                "responsive" => true,
                "title" => array(
                    "display" => true,
                    "text" => 'Chart.js Line Chart - Cubic interpolation mode'
                ),
                "tooltips" => array(
                    "mode" => 'index'
                ),
                "scales" => array(
                    "xAxes" => array(
                        array(
                            "display" => true,
                            "scaleLabel" => array(
                                "display" => true
                            )
                        )
                    ),
                    "yAxes" => array(
                        array(
                            "display" => true,
                            "scaleLabel" => array(
                                "display" => true,
                                "labelString" => 'Value'
                            ),
                            "ticks" => array(
                                "suggestedMin" => -10,
                                "suggestedMax" => 200,
                            )
                        )
                    )
                )
            )
        )
    );
    ?>
</div>