<div id="report_render">
    <h1 class="title">Scatter Plot</h1>
    <?php

    $data = [
        ['setosa_x' => 3.5, 'versicolor_x' => 3.2, 'setosa' => 0.2, 'versicolor' => 1.4],
        ['setosa_x' => 3.0, 'versicolor_x' => 3.2, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.2, 'versicolor_x' => 3.1, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.1, 'versicolor_x' => 2.3, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.6, 'versicolor_x' => 2.8, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.9, 'versicolor_x' => 2.8, 'setosa' => 0.4, 'versicolor' => 1.3],
        ['setosa_x' => 3.4, 'versicolor_x' => 3.3, 'setosa' => 0.3, 'versicolor' => 1.6],
        ['setosa_x' => 3.4, 'versicolor_x' => 2.4, 'setosa' => 0.2, 'versicolor' => 1.0],
        ['setosa_x' => 2.9, 'versicolor_x' => 2.9, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.1, 'versicolor_x' => 2.7, 'setosa' => 0.1, 'versicolor' => 1.4],
        ['setosa_x' => 3.7, 'versicolor_x' => 2.0, 'setosa' => 0.2, 'versicolor' => 1.0],
        ['setosa_x' => 3.4, 'versicolor_x' => 3.0, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.0, 'versicolor_x' => 2.2, 'setosa' => 0.1, 'versicolor' => 1.0],
        ['setosa_x' => 3.0, 'versicolor_x' => 2.9, 'setosa' => 0.1, 'versicolor' => 1.4],
        ['setosa_x' => 4.0, 'versicolor_x' => 2.9, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 4.4, 'versicolor_x' => 3.1, 'setosa' => 0.4, 'versicolor' => 1.4],
        ['setosa_x' => 3.9, 'versicolor_x' => 3.0, 'setosa' => 0.4, 'versicolor' => 1.5],
        ['setosa_x' => 3.5, 'versicolor_x' => 2.7, 'setosa' => 0.3, 'versicolor' => 1.0],
        ['setosa_x' => 3.8, 'versicolor_x' => 2.2, 'setosa' => 0.3, 'versicolor' => 1.5],
        ['setosa_x' => 3.8, 'versicolor_x' => 2.5, 'setosa' => 0.3, 'versicolor' => 1.1],
        ['setosa_x' => 3.4, 'versicolor_x' => 3.2, 'setosa' => 0.2, 'versicolor' => 1.8],
        ['setosa_x' => 3.7, 'versicolor_x' => 2.8, 'setosa' => 0.4, 'versicolor' => 1.3],
        ['setosa_x' => 3.6, 'versicolor_x' => 2.5, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.3, 'versicolor_x' => 2.8, 'setosa' => 0.5, 'versicolor' => 1.2],
        ['setosa_x' => 3.4, 'versicolor_x' => 2.9, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.0, 'versicolor_x' => 3.0, 'setosa' => 0.2, 'versicolor' => 1.4],
        ['setosa_x' => 3.4, 'versicolor_x' => 2.8, 'setosa' => 0.4, 'versicolor' => 1.4],
        ['setosa_x' => 3.5, 'versicolor_x' => 3.0, 'setosa' => 0.2, 'versicolor' => 1.7],
        ['setosa_x' => 3.4, 'versicolor_x' => 2.9, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.2, 'versicolor_x' => 2.6, 'setosa' => 0.2, 'versicolor' => 1.0],
        ['setosa_x' => 3.1, 'versicolor_x' => 2.4, 'setosa' => 0.2, 'versicolor' => 1.1],
        ['setosa_x' => 3.4, 'versicolor_x' => 2.4, 'setosa' => 0.4, 'versicolor' => 1.0],
        ['setosa_x' => 4.1, 'versicolor_x' => 2.7, 'setosa' => 0.1, 'versicolor' => 1.2],
        ['setosa_x' => 4.2, 'versicolor_x' => 2.7, 'setosa' => 0.2, 'versicolor' => 1.6],
        ['setosa_x' => 3.1, 'versicolor_x' => 3.0, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.2, 'versicolor_x' => 3.4, 'setosa' => 0.2, 'versicolor' => 1.6],
        ['setosa_x' => 3.5, 'versicolor_x' => 3.1, 'setosa' => 0.2, 'versicolor' => 1.5],
        ['setosa_x' => 3.6, 'versicolor_x' => 2.3, 'setosa' => 0.1, 'versicolor' => 1.3],
        ['setosa_x' => 3.0, 'versicolor_x' => 3.0, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.4, 'versicolor_x' => 2.5, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.5, 'versicolor_x' => 2.6, 'setosa' => 0.3, 'versicolor' => 1.2],
        ['setosa_x' => 2.3, 'versicolor_x' => 3.0, 'setosa' => 0.3, 'versicolor' => 1.4],
        ['setosa_x' => 3.2, 'versicolor_x' => 2.6, 'setosa' => 0.2, 'versicolor' => 1.2],
        ['setosa_x' => 3.5, 'versicolor_x' => 2.3, 'setosa' => 0.6, 'versicolor' => 1.0],
        ['setosa_x' => 3.8, 'versicolor_x' => 2.7, 'setosa' => 0.4, 'versicolor' => 1.3],
        ['setosa_x' => 3.0, 'versicolor_x' => 3.0, 'setosa' => 0.3, 'versicolor' => 1.2],
        ['setosa_x' => 3.8, 'versicolor_x' => 2.9, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.2, 'versicolor_x' => 2.9, 'setosa' => 0.2, 'versicolor' => 1.3],
        ['setosa_x' => 3.7, 'versicolor_x' => 2.5, 'setosa' => 0.2, 'versicolor' => 1.1],
        ['setosa_x' => 3.3, 'versicolor_x' => 2.8, 'setosa' => 0.2, 'versicolor' => 1.3]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $_SESSION['xs'] = ["setosa" => 'setosa_x', "versicolor" => 'versicolor_x'];
        $series = array(array('setosa_x', 'setosa'), array('versicolor_x', 'versicolor'));
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $virginica_x = [3.3, 2.7, 3.0, 2.9, 3.0, 3.0, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3.0, 2.5, 2.8, 3.2, 3.0, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3.0, 2.8, 3.0, 2.8, 3.8, 2.8, 2.8, 2.6, 3.0, 3.4, 3.1, 3.0, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3.0, 2.5, 3.0, 3.4, 3.0];
        $virginica = [2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['virginica_x'] = $virginica_x[$i];
            $_SESSION['data'][$i]['virginica'] = $virginica[$i];
        }
        $_SESSION['xs'] = ["setosa" => 'setosa_x', "versicolor" => 'versicolor_x', 'virginica' => 'virginica_x'];
        $series = array(array('setosa_x', 'setosa'), array('versicolor_x', 'versicolor'), array('virginica_x', 'virginica'));
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $_SESSION['xs'] = ["versicolor" => 'versicolor_x', 'virginica' => 'virginica_x'];
        $series = array(array('versicolor_x', 'versicolor'), array('virginica_x', 'virginica'));
    }

    if (isset($_POST['command']) && $_POST['command'] === 'final') {
        $virginica = [0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['virginica'] = $virginica[$i];
        }
        $_SESSION['xs'] = ["versicolor" => 'versicolor_x', 'virginica' => 'virginica_x'];
        $series = array(array('versicolor_x', 'versicolor'), array('virginica_x', 'virginica'));
    }

    \koolreport\d3\ScatterChart::create(array(
        "dataSource" => $_SESSION['data'],
        "series" => $series,
        "options" => array(
            "data" => array(
                'colors' => array(
                    "versicolor" => '#ff7f0e',
                    "virginica" => '#2ca02c '
                ),
            ),
            "axis" => array(
                "x" => array(
                    "label" => "Sapal.Width",
                    "tick" => array(
                        'fit' => false
                    )
                ),
                "y" => array(
                    "label" => "Pepal.Width",
                )
            )
        )
    ));
    ?>
</div>