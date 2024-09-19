<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(0, 100);
    }

    $color = [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(255, 159, 64)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
    ];

    $month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    $data = [
        ['month' => 'January',   'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'February',  'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'March',     'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'April',     'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'May',       'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'June',      'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
        ['month' => 'July',      'series1' => randomScalingFactor(), 'series2' => randomScalingFactor()],
    ];

    $series = array('month');
    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION["finalSerialNumber"] = 2;
        $_SESSION["toSeriesDelete"] = 1;
        $_SESSION["colorIndex"] = 0;
        $_SESSION['data'] = $data;
        for ($i = 1; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'borderColor' => $color[$colorIndex],
                    'backgroundColor' =>  $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
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
                    'borderColor' => $color[$colorIndex],
                    'backgroundColor' =>  $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
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
                    'borderColor' => $color[$colorIndex],
                    'backgroundColor' =>  $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
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
                array_push($series, 'series' . $i);
            }
            $colorIndex = $_SESSION['colorIndex'];
            foreach ($series as $key => $seri) {
                if ($key > 0) {
                    $series[$seri] = [
                        'borderColor' => $color[$colorIndex],
                        'backgroundColor' =>  $color[$colorIndex]
                    ];
                    $colorIndex = ($colorIndex + 1) % count($color);
                }
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'addData') {
        $valueI = $_SESSION['finalSerialNumber'] - $_SESSION['toSeriesDelete'];
        $lastEntry = array();
        if (count($_SESSION['data']) > 0) {
            $lastEntry = end($_SESSION['data']);
        } else {
            $lastEntry = $data[0];
        }
        $currentMonth = $lastEntry['month'];
        $index = array_search($currentMonth, $month);
        $nextMonth = '';
        if ($index !== false) {
            $nextIndex = ($index + 1) % count($month);
            $nextMonth = $month[$nextIndex];
            $newData = ['month' => $nextMonth];
            for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
                $newData['series' . $i] = randomScalingFactor();
            }
            array_push($_SESSION['data'], $newData);
        } else {
            array_push($_SESSION['data'], $_SESSION['temporaryData']);
        }
        for ($i = $valueI; $i <= $_SESSION['finalSerialNumber']; $i++) {
            array_push($series, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'borderColor' => $color[$colorIndex],
                    'backgroundColor' =>  $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
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
                    'borderColor' => $color[$colorIndex],
                    'backgroundColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }


    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "intersect" => false,
            ),
            "hover" => array(
                "mode" => 'nearest',
                "intersect" => true
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Month'
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Value'
                        ),
                        "ticks" => array(
                            "min" => 0,
                            "max" => 100,
                            "stepSize" => 5
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>