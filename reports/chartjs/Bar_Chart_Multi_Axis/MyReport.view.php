<div  id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'January',   'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'February',  'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'March',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'April',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'May',       'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'June',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'July',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
    ];

    \koolreport\chartjs\ColumnChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "Dataset 1" => array(
                "backgroundColor" => array(
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 99, 132)',
                ),
                "borderColor" => array(
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 99, 132)',
                ),
                "yAxisID" => "y-axis-1"
            ),
            "Dataset 2" => array(
                "backgroundColor" => 'rgb(201, 203, 207)',
                "borderColor" => 'rgb(201, 203, 207)',
                "yAxisID" => "y-axis-2"
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Bar Chart - Multi Axis'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "intersect" => true
            ),
            "scales" => array(
                "yAxes" => array(
                    array(
                        "type" => "linear",
                        "display" => true,
                        "position" => "left",
                        "id" => 'y-axis-1'
                    ),
                    array(
                        "type" => "linear",
                        "display" => true,
                        "position" => "right",
                        "id" => 'y-axis-2',
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