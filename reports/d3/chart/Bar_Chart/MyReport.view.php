<div id="report_render">
    <h1 class="title">Bar Chart</h1>
    <?php
    $data = [
        ['data1' => 30, 'data2' => 130],
        ['data1' => 200, 'data2' => 100],
        ['data1' => 100, 'data2' => 140],
        ['data1' => 400, 'data2' => 200],
        ['data1' => 150, 'data2' => 150],
        ['data1' => 250, 'data2' => 50]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $series = array('data1', 'data2');
    }

    if (isset($_POST['command']) && $_POST['command'] == 'final') {
        $data3 = [130, -150, 200, 300, -200, 100];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data3'] = $data3[$i];
        }
        $series = array('data1', 'data2', 'data3');
    }

    \koolreport\d3\ColumnChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
        "options" => array(
            "data" => array(
                "bar" => array(
                    "width" => array(
                        "ratio" => 0.5
                    )
                )
            )
        )
    ));
    ?>
</div>