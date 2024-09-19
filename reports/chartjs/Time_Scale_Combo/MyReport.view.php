<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $rgb = [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)',
        'rgb(255, 159, 64)',
    ];

    $rgba = [
        'rgb(255, 99, 132, 0.5)',
        'rgb(54, 162, 235, 0.5)',
        'rgb(75, 192, 192, 0.5)',
        'rgb(255, 205, 86, 0.5)',
        'rgb(153, 102, 255, 0.5)',
        'rgb(201, 203, 207, 0.5)',
        'rgb(255, 159, 64, 0.5)',
    ];

    function newDateString($days)
    {
        $date = new DateTime();
        $date->modify("+$days days");
        return $date->format('m/d/Y H:i');
    }

    $data = [
        ['date' => newDateString(0), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['date' => newDateString(1), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['date' => newDateString(2), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['date' => newDateString(3), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['date' => newDateString(4), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['date' => newDateString(5), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
        ['date' => newDateString(6), 'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor(), 'Dataset 3' => randomScalingFactor()],
    ];

    $series = array('date');
    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION["colorIndex"] = 0;
        $_SESSION["finalSerialNumber"] = 3;
        $_SESSION["toSeriesDelete"] = 2;
        $_SESSION['data'] = $data;
        for ($i = 1; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                if ($seri === 'Dataset 3') {
                    $_SESSION['type'] = 'line';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgb[$colorIndex],
                            'borderColor' => $rgb[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                } else {
                    $_SESSION['type'] = 'bar';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgba[$colorIndex],
                            'borderColor' => $rgba[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                }
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        $valueI =  $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        foreach ($_SESSION['data'] as &$entry) {
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                $entry['Dataset ' . $i] = randomScalingFactor();
            }
        }
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                if ($seri === 'Dataset 3') {
                    $_SESSION['type'] = 'line';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgb[$colorIndex],
                            'borderColor' => $rgb[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                } else {
                    $_SESSION['type'] = 'bar';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgba[$colorIndex],
                            'borderColor' => $rgba[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                }
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addDataset') {
        $_SESSION['finalSerialNumber'] = $_SESSION['finalSerialNumber'] + 1;
        $_SESSION["toSeriesDelete"] = $_SESSION["toSeriesDelete"] + 1;
        $seriesString = 'Dataset ' . $_SESSION['finalSerialNumber'];
        foreach ($_SESSION['data'] as &$entry) {
            $entry[$seriesString] = randomScalingFactor();
        }
        $valueI =  $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                if ($seri === 'Dataset 3') {
                    $_SESSION['type'] = 'line';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgb[$colorIndex],
                            'borderColor' => $rgb[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                } else {
                    $_SESSION['type'] = 'bar';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgba[$colorIndex],
                            'borderColor' => $rgba[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                }
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeDataset') {
        if (count($_SESSION['data'][0]) > 1) {
            $_SESSION['colorIndex'] = $_SESSION['colorIndex'] + 1;
            foreach ($_SESSION['data'] as &$item) {
                array_splice($item, 1, 1);
            }
            $_SESSION['toSeriesDelete'] = $_SESSION['toSeriesDelete'] - 1;
            $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                array_push($series, 'Dataset ' . $i);
            }
            $colorIndex = $_SESSION['colorIndex'];
            foreach ($series as $key => $seri) {
                if ($key > 0) {
                    if ($seri === 'Dataset 3') {
                        $_SESSION['type'] = 'line';
                        $series[$seri] = [
                            'config' => array(
                                'backgroundColor' => $rgb[$colorIndex],
                                'borderColor' => $rgb[$colorIndex],
                                "type" => $_SESSION['type'],
                                "fill" => false,
                                "borderWidth" => 3
                            ),
                        ];
                    } else {
                        $_SESSION['type'] = 'bar';
                        $series[$seri] = [
                            'config' => array(
                                'backgroundColor' => $rgba[$colorIndex],
                                'borderColor' => $rgba[$colorIndex],
                                "type" => $_SESSION['type'],
                                "fill" => false,
                                "borderWidth" => 3
                            ),
                        ];
                    }
                    $colorIndex = ($colorIndex + 1) % count($rgb);
                }
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'addData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        $newData = ['date' => newDateString(count($_SESSION['data']))];
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            $newData['Dataset ' . $i] = randomScalingFactor();
        }
        array_push($_SESSION['data'], $newData);
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                if ($seri === 'Dataset 3') {
                    $_SESSION['type'] = 'line';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgb[$colorIndex],
                            'borderColor' => $rgb[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                } else {
                    $_SESSION['type'] = 'bar';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgba[$colorIndex],
                            'borderColor' => $rgba[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                }
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        array_pop($_SESSION['data']);
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                if ($seri === 'Dataset 3') {
                    $_SESSION['type'] = 'line';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgb[$colorIndex],
                            'borderColor' => $rgb[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                } else {
                    $_SESSION['type'] = 'bar';
                    $series[$seri] = [
                        'config' => array(
                            'backgroundColor' => $rgba[$colorIndex],
                            'borderColor' => $rgba[$colorIndex],
                            "type" => $_SESSION['type'],
                            "fill" => false,
                            "borderWidth" => 3
                        ),
                    ];
                }
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }


    \koolreport\chartjs\ComboChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "title" => array(
                "text" => 'Chart.js Combo Time Scale'
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "type" => "time",
                        "display" => true,
                        "time" => array(
                            "format" => 'MM/DD/YYYY HH:mm',
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>