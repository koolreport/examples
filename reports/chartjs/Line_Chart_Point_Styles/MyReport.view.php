<div id="report_render" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $shape = ['circle', 'triangle', 'rect', 'rectRounded', 'rectRot', 'cross', 'crossRot', 'star', 'line', 'dash'];

    $data = [
        ['month' => 'January',   'value' => 10],
        ['month' => 'February',  'value' => 23],
        ['month' => 'March',     'value' => 5],
        ['month' => 'April',     'value' => 99],
        ['month' => 'May',       'value' => 67],
        ['month' => 'June',      'value' => 43],
        ['month' => 'July',      'value' => 0],
    ];

    for ($i = 0; $i < count($shape); $i++) {
    ?>
        <div style="width: 500px;margin-left: 40px;margin-right: 40px;margin-bottom: 40px;">
            <?php
            \koolreport\chartjs\LineChart::create(
                array(
                    'dataSource' => $data,
                    'columns' => array(
                        'month',
                        'value' => array(
                            "showLine" => false,
                            "pointRadius" => 10,
                            "pointHoverRadius" => 15,
                            "backgroundColor" => 'rgb(255, 99, 132)',
                            "borderColor" => 'rgb(255, 99, 132)',
                            "fill" => false,
                            "label" => "My First dataset"
                        )
                    ),
                    "options" => array(
                        "responsive" => true,
                        "title" => array(
                            "display" => true,
                            "text" => "Point Style: " . $shape[$i]
                        ),
                        "legend" => array(
                            "display" => false,
                        ),
                        "elements" => array(
                            "point" => array(
                                "pointStyle" => $shape[$i]
                            )
                        )
                    )
                )
            );
            ?>
        </div>
    <?php
    }
    ?>
</div>