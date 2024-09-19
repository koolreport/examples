<div style="width:60%;" id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(0, 100);
    }

    $data = [
        ['name' => 'Red', 'series1' => randomScalingFactor()],
        ['name' => 'Orange', 'series1' => randomScalingFactor()],
        ['name' => 'Yellow', 'series1' => randomScalingFactor()],
        ['name' => 'Green', 'series1' => randomScalingFactor()],
        ['name' => 'Blue', 'series1' => randomScalingFactor()],
    ];

    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        foreach ($_SESSION['data'] as &$entry) {
            $entry['series1'] = randomScalingFactor();
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addData') {
        $newData = ['name' => 'data' . count($_SESSION['data'])];
        $newData['series1'] = randomScalingFactor();
        array_push($_SESSION['data'], $newData);
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        array_pop($_SESSION['data']);
    }

    \koolreport\chartjs\PolarChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => array(
            "name",
            "series1"
        ),
        "options" => array(
            "responsive" => true,
            "legend" => array(
                "position" => 'right'
            ),
            "title" => array(
                "display" => true,
                "text" => "Chart.js Polar Area Chart"
            ),
            "scale" => array(
                "ticks" => array(
                    "beginAtZero" => true
                ),
                "reverse" => false
            ),
            "animation" => array(
                "animateRotate" => false,
                "animateScale" => true
            )
        ),
        "colorScheme" => array(
            "rgb(255, 99, 132, 0.5)",
            "rgb(255, 159, 64, 0.5)",
            "rgb(255, 205, 86, 0.5)",
            "rgb(75, 192, 192, 0.5)",
            "rgb(54, 162, 235, 0.5)"
        )
    ));
    ?>
</div>