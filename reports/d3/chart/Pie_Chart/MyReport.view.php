<div id="report_render">
    <h1 class="title">Pie Chart</h1>
    <?php
    $data = [
        ['label' => 'data1', 'data0' => 30],
        ['label' => 'data2', 'data0' => 120]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $series = array('label', 'data0');
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $setosa = [0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2];
        $versicolor = [1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3];
        $virginica = [2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8];
        array_push($_SESSION['data'], ['label' => 'setosa', 'data0' => $setosa[0]]);
        array_push($_SESSION['data'], ['label' => 'versicolor', 'data0' => $versicolor[0]]);
        array_push($_SESSION['data'], ['label' => 'virginica', 'data0' => $virginica[0]]);
        $series = array('label', 'data0',);
        for ($i = 1; $i < count($setosa); $i++) {
            $_SESSION['data'][0]['data' . $i] = null;
            $_SESSION['data'][1]['data' . $i] = null;
            $_SESSION['data'][2]['data' . $i] = $setosa[$i];
            $_SESSION['data'][3]['data' . $i] = $versicolor[$i];
            $_SESSION['data'][4]['data' . $i] = $virginica[$i];
            array_push($series, 'data' . $i);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'final') {
        array_splice($_SESSION['data'], 0, 2);
        $series = array('label', 'data0');
        for ($i = 1; $i < count($_SESSION['data'][0]) - 1; $i++) {
            array_push($series, 'data' . $i);
        }
    }

    \koolreport\d3\PieChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
        "options" => array(
            "data" => array(
                'colors' => array(
                    "data1" => '#1f77b4',
                    "data2" => '#F97600',
                    "setosa" => '#2ca02c',
                    "versicolor" => '#d62728',
                    "virginica" => '#9467bd'
                ),
                "onclick" => "function (d, i) { console.log(\"onclick\", d, i); }",
                "onmouseover" => "function (d, i) { console.log(\"onmouseover\", d, i); }",
                "onmouseout" => "function (d, i) { console.log(\"onmouseout\", d, i); }"
            )
        )
    ));
    ?>
</div>