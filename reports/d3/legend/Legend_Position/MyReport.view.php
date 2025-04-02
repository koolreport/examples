<div id="report_render">
    <h1 class='title'>Legend Position</h1>
    <?php
    $data = [
        ['data1' =>  30, 'data2' => 50],
        ['data1' => 200, 'data2' => 20],
        ['data1' => 100, 'data2' => 10],
        ['data1' => 400, 'data2' => 40],
        ['data1' => 150, 'data2' => 15],
        ['data1' => 250, 'data2' => 25]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['type'] = array(
            "type" => 'line',
            "colors" => array(
                "data2" => '#F97600',
                "data3" => '#60B044 ',
            )
        );
        $_SESSION['data'] = $data;
        $series = array(
            'data1',
            'data2',
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $_SESSION['type'] = array(
            "type" => 'line',
            "colors" => array(
                "data2" => '#F97600',
                "data3" => '#60B044 ',
            )
        );
        $data3 = [130, 150, 200, 300, 200, 100];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data3'] = $data3[$i];
        }
        $series = array(
            'data1',
            'data2',
            'data3',
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $_SESSION['type'] = array(
            "type" => 'line',
            "colors" => array(
                "data2" => '#F97600',
                "data3" => '#60B044 ',
            )
        );
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            array_splice($_SESSION['data'][$i], 0, 1);
        }
        $series = array(
            'data2',
            'data3',
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
        $_SESSION['type'] = array(
            "type" => 'pie',
            "colors" => array(
                "data2" => '#F97600',
                "data3" => '#60B044 ',
            )
        );
        $series = array(
            'data2',
            'data3',
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'final') {
        $_SESSION['type'] = array(
            "type" => 'line',
            "colors" => array(
                "data2" => '#F97600',
                "data3" => '#60B044 ',
            )
        );
        $series = array(
            'data2',
            'data3',
        );
    }

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
        "options" => array(
            "data" => $_SESSION['type'],
            "legend" => array(
                "position" => 'right'
            )
        )
    ));
    ?>
</div>