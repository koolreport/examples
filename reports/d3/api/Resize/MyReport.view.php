<div id="report_render">
    <h1 class='title'>Resize</h1>
    <div style="display: flex;justify-content: center;align-items: center;">
        <?php
        $data = [
            ['data1' =>  30, 'data2' => 50],
            ['data1' => 200, 'data2' => 20],
            ['data1' => 100, 'data2' => 10],
            ['data1' => 400, 'data2' => 40],
            ['data1' => 150, 'data2' => 15],
            ['data1' => 250, 'data2' => 25]
        ];

        if (!isset($_POST['command'])) {
            $_SESSION['height'] = '';
            $_SESSION['width'] = '';
        }

        if (isset($_POST['command']) && $_POST['command'] === 'second') {
            $_SESSION['height'] = 100;
            $_SESSION['width'] = 300;
        }

        if (isset($_POST['command']) && $_POST['command'] === 'third') {
            $_SESSION['height'] = 200;
            $_SESSION['width'] = '';
        }

        if (isset($_POST['command']) && $_POST['command'] === 'fourth') {
            $_SESSION['height'] = '';
            $_SESSION['width'] = '';
        }

        \koolreport\d3\LineChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'data1',
                'data2'
            ),
            "options" => array(
                "size" => array(
                    "height" => $_SESSION['height'],
                    "width" => $_SESSION['width']
                )
            )
        ));
        ?>
    </div>
</div>