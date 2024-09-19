<div id="report_render" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
    <?php

    $options = [
        ['Display: true', ['display' => true]],
        ['Display: false', ['display' => false]],
        ['Display: false, no border', ['display' => false, "drawBorder" => false]],
        ['DrawOnChartArea: false', ['display' => true, "drawBorder" => true, "drawOnChartArea" => false]],
        ['DrawTicks: false', ['display' => true, "drawBorder" => true, "drawOnChartArea" => true, "drawTicks" => false]],

    ];

    $data = [
        ['month' => 'January',  'My First dataset' => 10, 'My Second dataset' => 18],
        ['month' => 'February', 'My First dataset' => 30, 'My Second dataset' => 33],
        ['month' => ' March',   'My First dataset' => 39, 'My Second dataset' => 22],
        ['month' => 'April',    'My First dataset' => 20, 'My Second dataset' => 19],
        ['month' => 'May',      'My First dataset' => 25, 'My Second dataset' => 11],
        ['month' => 'June',     'My First dataset' => 34, 'My Second dataset' => 39],
        ['month' => 'July',     'My First dataset' => 0,  'My Second dataset' => 30]
    ];
    for ($i = 0; $i < count($options); $i++) {
    ?>
        <div style="width:500px;margin-left: 40px;margin-right: 40px;margin-bottom: 40px;">
            <?php
            \koolreport\chartjs\LineChart::create(array(
                'dataSource' => $data,
                'columns' => array(
                    "month",
                    "My First dataset" => array(
                        "fill" => false,
                        "backgroundColor" => 'rgb(255, 99, 132)',
                        "borderColor" => 'rgb(255, 99, 132)'
                    ),
                    "My Second dataset" => array(
                        "fill" => false,
                        "backgroundColor" => 'rgb(54, 162, 235)',
                        "borderColor" => 'rgb(54, 162, 235)'
                    )
                ),
                "options" => array(
                    "responsive" => true,
                    "title" => array(
                        "display" => true,
                        "text" => $options[$i][0],
                    ),
                    "scales" => array(
                        "xAxes" => array(
                            array(
                                "gridLines" => $options[$i][1]
                            )
                        ),
                        "yAxes" => array(
                            array(
                                "gridLines" =>  $options[$i][1],
                                "ticks" => array(
                                    "min" => 0,
                                    "max" => 100,
                                    "stepSize" => 10
                                )
                            )
                        )
                    )
                )
            ));
            ?>
        </div>
    <?php
    }
    ?>
</div>