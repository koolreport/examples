<div id="report_render">
    <h1 class="title">Duration of Transition</h1>
    <?php

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $this->dataStore('data1')->toArray();
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data1'] = intval($_SESSION['data'][$i]['data1']);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $_SESSION['data'] = $this->dataStore('data2')->toArray();
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data1'] = intval($_SESSION['data'][$i]['data1']);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $data2 = [
            ["data1" => 30, "data2" => 200, "data3" => 300],
            ["data1" => 20, "data2" => 130, "data3" => 200],
            ["data1" => 50, "data2" => 90, "data3" => 160],
            ["data1" => 40, "data2" => 240, "data3" => 400],
            ["data1" => 60, "data2" => 130, "data3" => 250],
            ["data1" => 50, "data2" => 220, "data3" => 250],
        ];
        $_SESSION['data'] = $data2;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
        $data3 = [
            ['data1', 'data2', 'data3'],
            [90, 120, 300],
            [40, 160, 240],
            [50, 200, 290],
            [120, 160, 230],
            [80, 130, 300],
            [90, 220, 320],
        ];
        $_SESSION['data'] = $data3;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
        $data4 = [null, 30, 20, 50, 40, 60, 50, 100, 200];
        for ($i = 1; $i <= count($data4); $i++) {
            if ($i > 6) {
                array_push($_SESSION['data'], [$data4[$i - 1], null, null]);
            } else {
                $_SESSION['data'][$i][0] = $data4[$i - 1];
            }
        }
    }

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" =>  array('data1', 'data2', 'data3'),
        "options" => array(
            "data" => array(
                'colors' => array(
                    "data2" => '#F97600',
                    "data3" => '#60B044',
                )
            ),
            "transition" => array(
                "duration" => 100
            )
        )
    ));
    ?>
</div>