<div style="width:50%;" id="report_render">
    <?php
    const PI = 3.1415;
    function randomScalingFactor()
    {
        return mt_rand(0, 100);
    }

    $colors = [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
    ];

    $data = [
        ['name' => 'Red', 'series1' => randomScalingFactor()],
        ['name' => 'Orange', 'series1' => randomScalingFactor()],
        ['name' => 'Yellow', 'series1' => randomScalingFactor()],
        ['name' => 'Green', 'series1' => randomScalingFactor()],
        ['name' => 'Blue', 'series1' => randomScalingFactor()],
    ];

    $series = array('name');
    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION['circumference'] = 2 * PI;
        $_SESSION['rotation'] = -PI / 2;
        $_SESSION["finalSerialNumber"] = 1;
        $_SESSION["toSeriesDelete"] = 0;
        $_SESSION['data'] = $data;
        $_SESSION['nextData'] = count($_SESSION['data']);
        for ($i = 1; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, "series" . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'changeCircleSize') {
        if ($_SESSION['circumference'] === PI) {
            $_SESSION['circumference'] = 2 * PI;
            $_SESSION['rotation'] = -PI / 2;
            $valueI =  $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                array_push($series, 'series' . $i);
            }
        } else {
            $_SESSION['circumference'] =  PI;
            $_SESSION['rotation'] = -PI;
            $valueI =  $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                array_push($series, 'series' . $i);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        $valueI =  $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        foreach ($_SESSION['data'] as &$entry) {
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                $entry['series' . $i] = randomScalingFactor();
            }
        }
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addDataset') {
        $_SESSION['finalSerialNumber'] = $_SESSION['finalSerialNumber'] + 1;
        $_SESSION["toSeriesDelete"] = $_SESSION["toSeriesDelete"] + 1;
        $seriesString = 'series' . $_SESSION['finalSerialNumber'];
        foreach ($_SESSION['data'] as &$entry) {
            $entry[$seriesString] = randomScalingFactor();
        }
        $valueI =  $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'removeDataset') {
        if (count($_SESSION['data'][0]) > 1) {
            foreach ($_SESSION['data'] as &$item) {
                array_splice($item, 1, 1);
            }
            $_SESSION['toSeriesDelete'] = $_SESSION['toSeriesDelete'] - 1;
            $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                array_push($series, 'series' . $i);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        $newData = ['name' => 'data' . $_SESSION['nextData']];
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            $newData['series' . $i] = randomScalingFactor();
        }
        array_push($_SESSION['data'], $newData);
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
        $_SESSION['nextData'] = $_SESSION['nextData'] + 1;
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        array_splice($_SESSION['data'], 0, 1);
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
    }   


    \koolreport\chartjs\DonutChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "circumference" => $_SESSION['circumference'],
            "rotation" => $_SESSION['rotation'],
            "responsive" => true,
            "lengend" => array(
                "position" => "top",
            ),
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Doughnut Chart'
            ),
            "animation" => array(
                "animateScale" => true,
                "animateRotate" => true
            ),
        ),
        "colorScheme" => array(
            "rgb(255, 99, 132)",
            "rgb(255, 159, 64)",
            "rgb(255, 205, 86)",
            "rgb(75, 192, 192)",
            "rgb(54, 162, 235)"
        )
    ));
    ?>
</div>