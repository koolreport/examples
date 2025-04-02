    <div id="report_render">
    <h1 class="title">Gauge Chart</h1>
    <?php
    $data = [
        ["label" => "data", "data1" => 91.4]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $_SESSION['data'][0]['data1'] = 10;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $_SESSION['data'][0]['data1'] = 50;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
        $_SESSION['data'][0]['data1'] = 70;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
        $_SESSION['data'][0]['data1'] = 0;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'final') {
        $_SESSION['data'][0]['data1'] = 100;
    }

    \koolreport\d3\GaugeChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => array(
            'label',
            'data1'
        ),
        "options" => array(
            "data" => array(
                "onclick" => "function (d, i) { console.log(\"onclick\", d, i); }",
                "onmouseover" => "function (d, i) { console.log(\"onmouseover\", d, i); }",
                "onmouseout" => "function (d, i) { console.log(\"onmouseout\", d, i); }"
            ),
            "color" => array(
                "pattern" => array(
                    '#FF0000',
                    '#F97600',
                    '#F6C600',
                    '#60B044'
                ),
                "threshold" => array(
                    "values" => array(
                        30,
                        60,
                        90,
                        100
                    )
                )
            ),
            "size" => array(
                "height" => 180
            )
        )
    ));
    ?>
</div>