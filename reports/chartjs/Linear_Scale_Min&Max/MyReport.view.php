<div id="report_render">
    <?php
    $data = [
        ['month' => 'January',   'My First dataset' => 10, 'My Second dataset' => 100],
        ['month' => 'February',  'My First dataset' => 30, 'My Second dataset' => 33],
        ['month' => 'March',     'My First dataset' => 50, 'My Second dataset' => 22],
        ['month' => 'April',     'My First dataset' => 20, 'My Second dataset' => 19],
        ['month' => 'May',       'My First dataset' => 25, 'My Second dataset' => 11],
        ['month' => 'June',      'My First dataset' => 44, 'My Second dataset' => 49],
        ['month' => 'July',      'My First dataset' => -10, 'My Second dataset' => 30],
    ];
    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "fill" => false,
                "borderColor" => 'rgb(255, 99, 132)',
                "backgroundColor" => 'rgb(255, 99, 132)'
            ),
            "My Second dataset" => array(
                "fill" => false,
                "borderColor" => 'rgb(54, 162, 235)',
                "backgroundColor" => 'rgb(54, 162, 235)'
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Min and Max Settings'
            ),
            "scales" => array(
                "yAxes" => array(
                    array(
                        "ticks" => array(
                            "min" => 10,
                            "max" => 50,
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>