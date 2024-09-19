<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return ceil(mt_rand() / mt_getrandmax() * 10.0) * pow(10, ceil(mt_rand() / mt_getrandmax() * 5));
    }

    $data = [
        ['month' => 'January',  'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'February', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'March',    'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'April',    'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'May',      'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'June',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'July',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
    ];

    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $_SESSION['type'] = 'linear';
    }

    if (isset($_POST['command'])) {
        $_SESSION['type'] = $_SESSION['type'] === 'linear' ? 'logarithmic' : 'linear';
    }

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $_SESSION['data'],
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
                "text" => 'Chart.js Line Chart - ' . $_SESSION['type']
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true
                    )
                ),
                "yAxes" => array(
                    array(
                        'display' => true,
                        "type" => $_SESSION['type']
                    )
                )
            )
        )
    ));
    ?>
</div>
</div>