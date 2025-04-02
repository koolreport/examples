<div id="report_render">
    <h1 class='title'>Timeseries Chart</h1>
    <?php

    $data = [
        ['x' => '2013-01-01', 'data1' => 30, 'data2' => 130],
        ['x' => '2013-01-02', 'data1' => 200, 'data2' => 340],
        ['x' => '2013-01-03', 'data1' => 100, 'data2' => 200],
        ['x' => '2013-01-04', 'data1' => 400, 'data2' => 500],
        ['x' => '2013-01-05', 'data1' => 150, 'data2' => 250],
        ['x' => '2013-01-06', 'data1' => 250, 'data2' => 350]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $series = array('x' => array(
            "type" => "date",
            "xDisplayFormat" => "%Y-%m-%d"
        ), 'data1', 'data2');
    }

    if (isset($_POST['command']) && $_POST['command'] == 'final') {
        $data3 = [400, 500, 450, 700, 600, 500];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data3'] = $data3[$i];
        }
        $series = array('x' => array(
            "type" => "date",
            "xDisplayFormat" => "%Y-%m-%d"
        ), 'data1', 'data2', 'data3');
    }

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
    ));
    ?>
</div>