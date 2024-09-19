<div  id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'January',   'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'February',  'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'March',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'April',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'May',       'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'June',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'July',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
    ];

    \koolreport\chartjs\ColumnChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "Dataset 1" => array(
                "backgroundColor" => 'rgb(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)'
            ),
            "Dataset 2" => array(
                "backgroundColor" => 'rgb(54, 162, 235)',
                "borderColor" => 'rgb(54, 162, 235)'
            ),
            "Dataset 3" => array(
                "backgroundColor" => 'rgb(75, 192, 192)',
                "borderColor" => 'rgb(75, 192, 192)'
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Bar Chart - Stacked'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "intersect" => false
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "stacked" => true,
                    )
                ),
                "yAxes" => array(
                    array(
                        "stacked" => true,
                    )
                )
            )
        )
    ));
    ?>
</div>