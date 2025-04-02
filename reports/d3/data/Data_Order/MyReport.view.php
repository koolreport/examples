<div id="report_render">
    <h1 class='title'>Data Order</h1>
    <?php
    $data = [
        ['data1' => 130, 'data2' => -130, 'data3' => -130],
        ['data1' => 200, 'data2' =>   10, 'data3' =>  -50],
        ['data1' => 320, 'data2' =>  130, 'data3' =>  -10],
        ['data1' => 400, 'data2' =>  200, 'data3' => -200],
        ['data1' => 530, 'data2' =>  150, 'data3' => -250],
        ['data1' => 750, 'data2' =>  250, 'data3' => -150]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
        $_SESSION['groups'] = array(
            'data1',
            'data2',
            'data3'
        );
        $series = array(
            'data1',
            'data2',
            'data3'
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $data4 = [1200, 1300, 1450, 1600, 1520, 1820];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data4'] = $data4[$i];
        }
        $series = array(
            'data1',
            'data2',
            'data3',
            'data4'
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $data5 = [200, 300, 450, 600, 520, 820];
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data5'] = $data5[$i];
        }
        $series = array(
            'data1',
            'data2',
            'data3',
            'data4',
            'data5'
        );
    }

    if (isset($_POST['command']) && $_POST['command'] === 'final') {
        $_SESSION['groups'] = array(
            'data1',
            'data2',
            'data3',
            'data4',
            'data5'
        );
        $series = array(
            'data1',
            'data2',
            'data3',
            'data4',
            'data5'
        );
    }


    \koolreport\d3\ColumnChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
        "options" => array(
            "data" => array(
                "groups" => array(
                    $_SESSION['groups']
                ),
                "order" => 'desc'
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