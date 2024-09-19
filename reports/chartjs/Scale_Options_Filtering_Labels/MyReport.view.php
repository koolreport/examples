<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return round(rand(0, 50) * (rand(0, 1) ? 1 : 1)) + 50;
    }

    $data = [
        ['month' => 'January',  'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'February', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => ' March',   'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'April',    'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'May',      'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'June',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'July',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
    ];
    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "fill" => false,
                "backgroundColor" => 'rgb(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)'
            ),
            "My Second dataset" => array(
                "fill" => false,
                "backgroundColor" => 'rgb(54, 162, 235)',
                "borderColor" => 'rgb(54, 162, 235)'
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => "Chart.js Line Chart - X-Axis Filter",
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true,
                        "ticks" => array(
                            "callback" => "function(dataLabel, index) {
								// Hide the label of every 2nd dataset. return null to hide the grid line too
								return index % 2 === 0 ? dataLabel : '';
							}"
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "display" => true,
                        "beginAtZero" => false
                    )
                )
            )
        )
    ));
    ?>
</div>
</div>