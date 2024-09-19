<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'February',  'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'January',   'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'March',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'April',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'May',       'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'June',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['month' => 'July',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
    ];

    \koolreport\chartjs\ComboChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "Dataset 1" => array(
                "borderWidth" => 2,
                "borderColor" => 'rgb(54, 162, 235)',
                "fill" => false,
                "config" => array(
                    "type" => "line",
                )
            ),
            "Dataset 2" => array(
                "borderWidth" => 2,
                "borderColor" => 'white',
                "backgroundColor" => 'rgb(255, 99, 132)'
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
                "text" => 'Chart.js Combo Bar Line Chart'
            ),
            "tooltip" => array(
                "mode" => "index",
                "intersect" => true
            )
        )
    ));
    ?>
</div>