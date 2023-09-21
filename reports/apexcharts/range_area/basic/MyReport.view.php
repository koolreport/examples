<div class="report-content">
    <div class="text-center">
        <h1>RangeAreaChart</h1>
        <p class="lead">
            This example shows how to create beautiful RangeAreaChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'month',
                'temp_min',
                'temp_max',
            ],
            [
                "Jan",
                -2,
                4
            ],
            [
                "Feb",
                -1,
                6
            ],
            [
                "Mar",
                3,
                10
            ],
            [
                "Apr",
                8,
                16
            ],
            [
                "May",
                13,
                22
            ],
            [
                "Jun",
                18,
                26
            ],
            [
                "Jul",
                21,
                29
            ],
            [
                "Aug",
                21,
                28
            ],
            [
                "Sep",
                17,
                24
            ],
            [
                "Oct",
                11,
                18
            ],
            [
                "Nov",
                6,
                12
            ],
            [
                "Dec",
                1,
                7
            ]
        ];
        \koolreport\apexcharts\RangeAreaChart::create(array(
            "title" => "New York Temperature (all year round)",
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                'temp_range' => [
                    "label" => "Temperature Range",
                    'combination' => [
                        "temp_min",
                        "temp_max"
                    ]
                ]
            ),
            "options" => [
                'markers | hover | sizeOffset' => 5,
                'yaxis | labels | formatter' => "(val) => {
                    return val + '°C'
                }",
                'tooltip | y | | title | formatter' => "() => {
                    return 'New York Temperature';
                }",
            ],
            'strokeCurve' => 'straight',
            'strokeWidth' => 0,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>