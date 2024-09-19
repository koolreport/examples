<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        $firstRandom = ceil(mt_rand() / mt_getrandmax() * 10.0);
        $secondRandom = ceil(mt_rand() / mt_getrandmax() * 5);
        $result = $firstRandom * pow(10, $secondRandom);
        return $result;
    }
    $data = [
        ['month' => 'January',   'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'February',  'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'March',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'April',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'May',       'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'June',      'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'July',      'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
    ];
    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "fill" => false,
                "borderColor" => 'rgb(255, 99, 132)',
                "backgroundColor" => 'rgb(255, 99, 132)'
            ),
            "My Second dataset" => array(
                "fill" => false,
                "borderColor" => 'rgb(54, 162, 235)',
                "backgroundColor" => 'rgb(54, 162, 235)'
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart - Logarithmic'
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true
                    )
                ),
                "yAxes" => array(
                    array(
                        "display" => true,
                        "type" => "logarithmic"
                    )
                )
            )
        )
    ));
    ?>
</div>