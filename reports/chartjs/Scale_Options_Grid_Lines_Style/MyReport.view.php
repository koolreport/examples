<div id="report_render">
    <?php
    $data = [
        ['month' => 'January',  'My First dataset' => 10,  'My Second dataset' => 18],
        ['month' => 'February', 'My First dataset' => 30,  'My Second dataset' => 33],
        ['month' => ' March',   'My First dataset' => 39,  'My Second dataset' => 22],
        ['month' => 'April',    'My First dataset' => 20,  'My Second dataset' => 19],
        ['month' => 'May',      'My First dataset' => 25,  'My Second dataset' => 11],
        ['month' => 'June',     'My First dataset' => 34,  'My Second dataset' => 39],
        ['month' => 'July',     'My First dataset' => -10, 'My Second dataset' => 30]
    ];
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
                "text" => "Grid Line Settings",
            ),
            "scales" => array(
                "yAxes" => array(
                    array(
                        "gridLines" => array(
                            "drawBorder" => false,
                            "color" => array('pink', 'red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple')
                        ),
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
</div>