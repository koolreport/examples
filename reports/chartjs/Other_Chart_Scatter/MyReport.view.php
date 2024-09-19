<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    function generateData()
    {
        $data = array();
        for ($i = 0; $i < 7; $i++) {
            array_push($data, array(
                'x' => randomScalingFactor(),
                'y' => randomScalingFactor()
            ));
        }
        return $data;
    }
    $data1 = generateData();
    $data2 = generateData();

    $datas = [
        ["FirstX" => $data1[0]['x'], "FirstY" => $data1[0]['y'], "SecondX" => $data2[0]['x'], "SecondY" => $data2[0]['y']],
        ["FirstX" => $data1[1]['x'], "FirstY" => $data1[1]['y'], "SecondX" => $data2[1]['x'], "SecondY" => $data2[1]['y']],
        ["FirstX" => $data1[2]['x'], "FirstY" => $data1[2]['y'], "SecondX" => $data2[2]['x'], "SecondY" => $data2[2]['y']],
        ["FirstX" => $data1[3]['x'], "FirstY" => $data1[3]['y'], "SecondX" => $data2[3]['x'], "SecondY" => $data2[3]['y']],
        ["FirstX" => $data1[4]['x'], "FirstY" => $data1[4]['y'], "SecondX" => $data2[4]['x'], "SecondY" => $data2[4]['y']],
        ["FirstX" => $data1[5]['x'], "FirstY" => $data1[5]['y'], "SecondX" => $data2[5]['x'], "SecondY" => $data2[5]['y']],
        ["FirstX" => $data1[6]['x'], "FirstY" => $data1[6]['y'], "SecondX" => $data2[6]['x'], "SecondY" => $data2[6]['y']],

    ];

    \koolreport\chartjs\ScatterChart::create(array(
        'dataSource' => $datas,
        "series" => array(
            array(
                "FirstX", "FirstY",
                array(
                    "label" => "My First dataset",
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)',
                )
            ),
            array(
                "SecondX", "SecondY",
                array(
                    "label" => "My Second dataset",
                    "backgroundColor" => 'rgba(54, 162, 235, 0.5)',
                    "borderColor" => 'rgb(54, 162, 235)'
                )
            ),
        ),
        "options" => array(
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Scatter Chart'
            )
        )
    ));
    ?>
</div>