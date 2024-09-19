<div style="width:50%;" id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(0, 100);
    }
    $rgb = [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(255, 159, 64)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
    ];
    $rgba = [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(255, 205, 86, 0.5)',
        'rgba(255, 159, 64, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(201, 203, 207, 0.5)'
    ];

    $data = [
        ['label' => ['Eating', 'Dinner'],      'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['label' => ['Drinking', 'Water'],     'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['label' => 'Sleeping',                'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['label' => ['Designing', 'Graphics'], 'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['label' => 'Coding',                  'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['label' => 'Cycling',                 'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['label' => 'Running',                 'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
    ];

    $series = array('label');
    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION["finalSerialNumber"] = 2;
        $_SESSION["toSeriesDelete"] = 1;
        $_SESSION["colorIndex"] = 0;
        $_SESSION['data'] = $data;
        for ($i = 1; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, "series" . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex],
                    "borderWidth" => 3
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
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
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex],
                    "borderWidth" => 3
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
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
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex],
                    "borderWidth" => 3
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'removeDataset') {
        if (count($_SESSION['data'][0]) > 1) {
            $_SESSION['colorIndex'] = $_SESSION['colorIndex'] + 1;
            foreach ($_SESSION['data'] as &$item) {
                array_splice($item, 1, 1);
            }
            $_SESSION['toSeriesDelete'] = $_SESSION['toSeriesDelete'] - 1;
            $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                array_push($series, 'series' . $i);
            }
            $colorIndex = $_SESSION['colorIndex'];
            foreach ($series as $key => $seri) {
                if ($key > 0) {
                    $series[$seri] = [
                        'backgroundColor' => $rgba[$colorIndex],
                        'borderColor' => $rgb[$colorIndex],
                        "borderWidth" => 3
                    ];
                    $colorIndex = ($colorIndex + 1) % count($rgb);
                }
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        $newData = ["label" => 'dataset#' . count($_SESSION['data'])];
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            $newData['series' . $i] = randomScalingFactor();
        }
        array_push($_SESSION['data'], $newData);
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex],
                    "borderWidth" => 3
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        array_pop($_SESSION['data']);
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex],
                    "borderWidth" => 3
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    \koolreport\chartjs\RadarChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "legend" => array(
                "position" => "top"
            ),
            "title" => array(
                "display" => true,
                "text" => "Chat.js Radar Chart"
            ),
            "scale" => array(
                "ticks" => array(
                    "beginAtZero" => true
                )
            )
        )
    ));
    ?>
</div>