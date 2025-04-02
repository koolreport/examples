<div id="report_render">
    <h1 class="title">Load Data</h1>
    <?php

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $this->dataStore('firstData')->toArray();
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data1'] = intval($_SESSION['data'][$i]['data1']);
        }
        $series = array('data1', 'data2', 'data3');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = '';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $_SESSION['data'] = $this->dataStore('secondData')->toArray();
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data1'] = intval($_SESSION['data'][$i]['data1']);
        }
        $series = array('data1', 'data2', 'data3');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = '';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $data2 = [
            ['data1' => 130, 'data4' => 30],
            ['data1' => 120, 'data4' => 20],
            ['data1' => 150, 'data4' => 50],
            ['data1' => 140, 'data4' => 40],
            ['data1' => 160, 'data4' => 60],
            ['data1' => 150, 'data4' => 50],
        ];
        $_SESSION['data'] = $data2;
        $series = array('data1', 'data4');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = '';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
        $data3 = [
            ['data2', 'data3'],
            [120, 300],
            [160, 240],
            [200, 290],
            [160, 230],
            [130, 300],
            [220, 320],
        ];
        $_SESSION['data'] = $data3;
        $series = array('data2', 'data3');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = '';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
        $data4 = [
            ['data2', 'data3', 'data4'],
            [120, 300, 30],
            [160, 240, 20],
            [200, 290, 50],
            [160, 230, 40],
            [130, 300, 60],
            [220, 320, 50],
            [null, null, 100],
            [null, null, 200]
        ];
        $_SESSION['data'] = $data4;
        $series = array('data2', 'data3', 'data4');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = 'bar';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'sixth') {
        $data5 = [
            ['data2', 'data3'],
            [120, 300],
            [160, 240],
            [200, 290],
            [160, 230],
            [130, 300],
            [220, 320],
        ];
        $_SESSION['data'] = $data5;
        $series = array('data2', 'data3');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = '';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'seventh') {
        $data6 = [
            ['data2', 'data3'],
            [null, 300],
            [30, 240],
            [20, 290],
            [50, 230],
            [40, 300],
            [60, 320],
            [50, null]
        ];
        $_SESSION['data'] = $data6;
        $series = array('data2', 'data3');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = '';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'eighth') {
        $data8 = [
            ['data4', 'data2', 'data3'],
            [90, 120, 300],
            [40, 160, 240],
            [50, 200, 290],
            [120, 160, 230],
            [80, 130, 300],
            [90, 220, 320],
        ];
        $_SESSION['data'] = $data8;
        $series = array('data4', 'data2', 'data3');
        $_SESSION['type2'] = 'bar';
        $_SESSION['type3'] = 'bar';
        $_SESSION['type4'] = 'bar';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'ninth') {
        $data9 = [
            ['data4', 'data2', 'data3', 'data5', 'data6'],
            [90, 120, 300, 190, 420],
            [40, 160, 240, 140, 460],
            [50, 200, 290, 150, 500],
            [120, 160, 230, 220, 460],
            [80, 130, 300, 180, 430],
            [90, 220, 320, 190, 520],
        ];
        $_SESSION['data'] = $data9;
        $series = array('data4', 'data2', 'data3', 'data5', 'data6');
        $_SESSION['type2'] = 'bar';
        $_SESSION['type3'] = 'bar';
        $_SESSION['type4'] = 'bar';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    if (isset($_POST['command']) && $_POST['command'] === 'tenth') {
        $data10 = [
            ['data4', 'data5', 'data6'],
            [90, 190, 420],
            [40, 140, 460],
            [50, 150, 500],
            [120, 220, 460],
            [80, 80, 430],
            [90, 190, 520],
        ];
        $_SESSION['data'] = $data10;
        $series = array('data4', 'data5', 'data6');
        $_SESSION['type2'] = '';
        $_SESSION['type3'] = '';
        $_SESSION['type4'] = 'bar';
        $_SESSION['type5'] = '';
        $_SESSION['type6'] = '';
    }

    \koolreport\d3\LineChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => $series,
        "options" => array(
            "data" => array(
                "types" => array(
                    "data2" => $_SESSION['type2'],
                    "data3" => $_SESSION['type3'],
                    "data4" => $_SESSION['type4'],
                    "data5" => $_SESSION['type5'],
                    "data6" => $_SESSION['type6'],
                ),
                'colors' => array(
                    "data2" => '#F97600',
                    "data3" => '#60B044',
                    "data4" => '#FF0000',
                    "data5" => '#8B008B',
                    "data6" => '#D2B48C'
                )
            )
        )
    ));
    ?>
</div>