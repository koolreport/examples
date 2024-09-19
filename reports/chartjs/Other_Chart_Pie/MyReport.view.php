<div style="width:50%;" id="report_render">
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

    $series = array('name');
    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION["finalSerialNumber"] = 1;
        $_SESSION["toSeriesDelete"] = 0;
        $_SESSION['data'] = $data;
        for ($i = 1; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, "series" . $i);
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

    \koolreport\chartjs\PieChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "responsive" => true,
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