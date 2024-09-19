<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
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

    $columns = array('month');
    $columnsString = '';
    if (!isset($_POST['command'])) {
        $_SESSION["numberOfDataset"] = 2;
        $_SESSION["colorIndex"] = 0;
        $_SESSION['data'] = $data;
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($columns, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($columns as $key => $seri) {
            if ($key > 0) {
                $columns[$seri] = [
                    'backgroundColor' => $color[$colorIndex],
                    'borderColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        foreach ($_SESSION['data'] as &$entry) {
            for ($i = 0; $i <= $_SESSION['numberOfDataset']; $i++) {
                $entry['series' . $i] = randomScalingFactor();
            }
        }
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($columns, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($columns as $key => $seri) {
            if ($key > 0) {
                $columns[$seri] = [
                    'backgroundColor' => $color[$colorIndex],
                    'borderColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addDataset') {
        $_SESSION['numberOfDataset'] = $_SESSION['numberOfDataset'] + 1;
        $columnsString = 'series' . $_SESSION['numberOfDataset'];
        foreach ($_SESSION['data'] as &$entry) {
            $entry[$columnsString] = randomScalingFactor();
        }
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($columns, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($columns as $key => $seri) {
            if ($key > 0) {
                $columns[$seri] = [
                    'backgroundColor' => $color[$colorIndex],
                    'borderColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeDataset') {
        if ($_SESSION['numberOfDataset'] > 0) {
            $_SESSION['colorIndex'] = $_SESSION['colorIndex'] + 1;
            $columnsString = 'series' . $_SESSION['numberOfDataset'];
            foreach ($_SESSION['data'] as &$item) {
                unset($item[$columnsString]);
            }
            $_SESSION['numberOfDataset'] = $_SESSION['numberOfDataset'] - 1;
            for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
                array_push($columns, 'series' . $i);
            }
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($columns as $key => $seri) {
            if ($key > 0) {
                $columns[$seri] = [
                    'backgroundColor' => $color[$colorIndex],
                    'borderColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'addData') {
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
            for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
                $newData['series' . $i] = randomScalingFactor();
            }
            array_push($_SESSION['data'], $newData);
        } else {
            array_push($_SESSION['data'], $_SESSION['temporaryData']);
        }
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($columns, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($columns as $key => $seri) {
            if ($key > 0) {
                $columns[$seri] = [
                    'backgroundColor' => $color[$colorIndex],
                    'borderColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        array_pop($_SESSION['data']);
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($columns, 'series' . $i);
        }
        $colorIndex = $_SESSION['colorIndex'];
        foreach ($columns as $key => $seri) {
            if ($key > 0) {
                $columns[$seri] = [
                    'backgroundColor' => $color[$colorIndex],
                    'borderColor' => $color[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($color);
            }
        }
    }


    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $columns,
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'ChartJs Line Chart'
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
                    "display" => true,
                    "scaleLabel" => array(
                        "display" => true,
                        "labelString" => 'Month'
                    )
                ),
                "yAxes" => array(
                    "display" => true,
                    "scaleLabel" => array(
                        "display" => true,
                        "labelString" => 'Value'
                    )
                )
            )
        )
    ));
    ?>
</div>