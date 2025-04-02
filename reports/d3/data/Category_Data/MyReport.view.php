<div id="report_render">
    <h1 class='title'>Category Data</h1>
    <?php
    $data = [
        ['x' => 'www.site1.com', 'download' =>  30, 'loading' =>  90],
        ['x' => 'www.site2.com', 'download' => 200, 'loading' => 100],
        ['x' => 'www.site3.com', 'download' => 100, 'loading' => 140],
        ['x' => 'www.site4.com', 'download' => 400, 'loading' => 200]
    ];

    $series = array();
    if (!isset($_POST['command'])) {
        $_SESSION['data'] = $data;
    }

    if (isset($_POST['command']) && $_POST['command'] === 'second') {
        $_SESSION['data'] = [
            ['x' => 'www.siteA.com', 'download' => 130, 'loading' => 190],
            ['x' => 'www.siteB.com', 'download' => 200, 'loading' => 180],
            ['x' => 'www.siteC.com', 'download' => 150, 'loading' => 190],
            ['x' => 'www.siteD.com', 'download' => 350, 'loading' => 140]
        ];
    }

    if (isset($_POST['command']) && $_POST['command'] === 'third') {
        $_SESSION['data'] = [
            ['x' => 'www.siteE.com', 'download' =>  30, 'loading' =>  90],
            ['x' => 'www.siteF.com', 'download' => 300, 'loading' => 130],
            ['x' => 'www.siteG.com', 'download' => 200, 'loading' => 240],
        ];
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fourth') {

        $_SESSION['data'] = [
            ['x' => 'www.site1.com', 'download' => 130, 'loading' => 190],
            ['x' => 'www.site2.com', 'download' => 300, 'loading' => 130],
            ['x' => 'www.site3.com', 'download' => 200, 'loading' => 240],
            ['x' => 'www.site4.com', 'download' => 470, 'loading' => 340]
        ];
    }

    if (isset($_POST['command']) && $_POST['command'] === 'fifth') {
        $_SESSION['data'] = [
            ['x' => 'www.site1.com', 'download' =>  30, 'loading' => 90],
            ['x' => 'www.site2.com', 'download' =>  30, 'loading' => 30],
            ['x' => 'www.site3.com', 'download' =>  20, 'loading' => 40],
            ['x' => 'www.site4.com', 'download' => 170, 'loading' => 40]
        ];
    }

    if (isset($_POST['command']) && $_POST['command'] === 'final') {
        $_SESSION['data'] = $this->dataStore('data')->toArray();
    }

    \koolreport\d3\ColumnChart::create(array(
        "dataSource" => $_SESSION['data'],
        "columns" => array(
            'x',
            'download',
            'loading'
        ),
        "options" => array(
            "data" => array(
                "x" => 'x',
                "groups" => array(
                    array('download', 'loading')
                )
            ),
            "axis" => array(
                "x" => array(
                    "type" => 'category'
                )
            )
        )
    ));
    ?>
</div>