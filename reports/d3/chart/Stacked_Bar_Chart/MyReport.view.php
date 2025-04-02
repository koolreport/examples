<div id="report_render">
    <h1 class="title">Bar Chart</h1>
    <?php
    $data = [
        ['data1' =>  -30, 'data2' =>  130, 'data3' => -230],
        ['data1' =>  200, 'data2' =>  100, 'data3' =>  200],
        ['data1' =>  200, 'data2' => -100, 'data3' =>  200],
        ['data1' =>  400, 'data2' =>  200, 'data3' => -300],
        ['data1' => -150, 'data2' => -150, 'data3' =>  250],
        ['data1' =>  250, 'data2' =>   50, 'data3' =>  250]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $_SESSION['groups'] = ['data1', 'data2'];
        $series = array('data1', 'data2', 'data3');
    }

    if (isset($_POST['command']) && $_POST['command'] == 'first') {
        $_SESSION['groups'] = ['data1', 'data2', 'data3'];
        $series = array('data1', 'data2', 'data3');
    }

    if (isset($_POST['command']) && $_POST['command'] == 'second') {
        $data4 = [100, -50, 150, 200, -300, -100];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data4'] = $data4[$i];
        }
        $series = array('data1', 'data2', 'data3', 'data4');
    }

    if (isset($_POST['command']) && $_POST['command'] == 'final') {
        $_SESSION['groups'] = ['data1', 'data2', 'data3', 'data4'];
        $series = array('data1', 'data2', 'data3', 'data4');
    }

    \koolreport\d3\ColumnChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
        "options" => array(
            "data" => array(
                "groups" => array(
                    $_SESSION['groups']
                )
            ),
            "grid" => array(
                "y" => array(
                    "lines" => array(
                        array(
                            "value" => 0
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>