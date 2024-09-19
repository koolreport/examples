<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    function newDate($days)
    {
        $date = new DateTime();
        $date->modify("+$days days");
        return $date->format('F d, Y, H:i:s a');
    }

    function newDateString($days)
    {
        $date = new DateTime();
        $date->modify("+$days days");
        return $date->format('Y-m-d  H:i:s');
    }

    $data = [
        ["label" => newDate(0), "Dataset with string point data" => ['x' => newDateString(0), 'y' => randomScalingFactor()], "Dataset with date object point data" => ['x' => newDate(0), 'y' => randomScalingFactor()]],
        ["label" => newDate(2), "Dataset with string point data" => ['x' => newDateString(2), 'y' => randomScalingFactor()], "Dataset with date object point data" => ['x' => newDate(2), 'y' => randomScalingFactor()]],
        ["label" => newDate(4), "Dataset with string point data" => ['x' => newDateString(4), 'y' => randomScalingFactor()], "Dataset with date object point data" => ['x' => newDate(4), 'y' => randomScalingFactor()]],
        ["label" => newDate(5), "Dataset with string point data" => ['x' => newDateString(5), 'y' => randomScalingFactor()], "Dataset with date object point data" => ['x' => newDate(5), 'y' => randomScalingFactor()]],
    ];

    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        foreach ($_SESSION['data'] as &$entry) {
            $entry['Dataset with string point data']['y'] = randomScalingFactor();
            $entry['Dataset with date object point data']['y'] = randomScalingFactor();
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'addData') {
        $newData = ["label" => newDate(count($_SESSION['data']) + 2), "Dataset with string point data" => ["x" => newDateString(count($_SESSION['data']) + 2), "y" => randomScalingFactor()], "Dataset with date object point data" => ['x' => newDate(count($_SESSION['data']) + 2), 'y' => randomScalingFactor()]];
        array_push($_SESSION['data'], $newData);
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        array_pop($_SESSION['data']);
    }

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => array(
            "label",
            "Dataset with string point data" => array(
                "label" => "Dataset with string point data",
                "fill" => false,
                "backgroundColor" => 'rgba(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)'
            ),
            "Dataset with date object point data" => array(
                "label" => 'Dataset with date object point data',
                "fill" => false,
                "backgroundColor" => 'rgba(54, 162, 235)',
                "borderColor" => 'rgb(54, 162, 235)'
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Time Point Data'
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "type" => "time",
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => "Date"
                        ),
                        "ticks" => array(
                            "major" => array(
                                "fontStyle" => "bold",
                                "fontColor " => "#FF0000"
                            )
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Value'
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>