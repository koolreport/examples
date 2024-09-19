<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $rgb = [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)',
        'rgb(255, 159, 64)',
    ];

    $rgba = [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 205, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(201, 203, 207, 0.5)',
        'rgba(255, 159, 64, 0.5)',
    ];

    $month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    $data = [
        ['month' => 'January',   'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'February',  'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'March',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'April',     'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'May',       'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'June',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
        ['month' => 'July',      'Dataset 1' => randomScalingFactor(), 'Dataset 2' => randomScalingFactor()],
    ];

    $series = array('month');
    $seriesString = '';
    if (!isset($_POST['command'])) {
        $_SESSION["numberOfDataset"] = 2;
        $_SESSION['data'] = $data;
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = 0;
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'randomizeData') {
        foreach ($_SESSION['data'] as &$entry) {
            for ($i = 0; $i <= $_SESSION['numberOfDataset']; $i++) {
                $entry['Dataset ' . $i] = mt_rand() < 0.2 ? 0 : randomScalingFactor();
            }
        }
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = 0;
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'addDataset') {
        $_SESSION['numberOfDataset'] = $_SESSION['numberOfDataset'] + 1;
        $seriesString = 'Dataset ' . $_SESSION['numberOfDataset'];
        foreach ($_SESSION['data'] as &$entry) {
            $entry[$seriesString] = randomScalingFactor();
        }
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = 0;
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeDataset') {
        if ($_SESSION['numberOfDataset'] > 0) {
            foreach ($_SESSION['data'] as &$item) {
                array_splice($item, -1, 1);
            }
            $_SESSION['numberOfDataset'] = $_SESSION['numberOfDataset'] - 1;
            for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
                array_push($series, 'Dataset ' . $i);
            }
            $colorIndex = 0;
            foreach ($series as $key => $seri) {
                if ($key > 0) {
                    $series[$seri] = [
                        'backgroundColor' => $rgba[$colorIndex],
                        'borderColor' => $rgb[$colorIndex]
                    ];
                    $colorIndex = ($colorIndex + 1) % count($rgb);
                }
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
                $newData['Dataset ' . $i] = randomScalingFactor();
            }
            array_push($_SESSION['data'], $newData);
        } else {
            array_push($_SESSION['data'], $_SESSION['temporaryData']);
        }
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = 0;
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }

    if (isset($_POST['command']) && $_POST['command'] == 'removeData') {
        array_pop($_SESSION['data']);
        for ($i = 1; $i <= $_SESSION['numberOfDataset']; $i++) {
            array_push($series, 'Dataset ' . $i);
        }
        $colorIndex = 0;
        foreach ($series as $key => $seri) {
            if ($key > 0) {
                $series[$seri] = [
                    'backgroundColor' => $rgba[$colorIndex],
                    'borderColor' => $rgb[$colorIndex]
                ];
                $colorIndex = ($colorIndex + 1) % count($rgb);
            }
        }
    }


    \koolreport\chartjs\BarChart::create(array(
        'dataSource' => $_SESSION['data'],
        'columns' => $series,
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Horizontal Bar Chart'
            ),
            "legend" => array(
                "position" => 'right'
            ),
            "elements" => array(
                "rectangle" => array(
                    "borderWidth" => 2
                )
            )
        )
    ));
    ?>
</div>