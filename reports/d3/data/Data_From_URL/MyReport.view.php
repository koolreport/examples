<div id="report_render">
    <h1 class="title">Data from URL</h1>
    <?php
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $this->dataStore('firstData')->toArray();
        for ($i = 0; $i < count($_SESSION['data']); $i++) {
            $_SESSION['data'][$i]['data1'] = intval($_SESSION['data'][$i]['data1']);
        }
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $_SESSION['data'] = $this->dataStore('secondData')->toArray();
    }


    \koolreport\d3\LineChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => array(
            'data1',
            'data2',
            'data3'
        ),
    ));
    ?>
</div>