<div class="report-content">
    <div class="text-center">
        <h1>ColumnChart</h1>
        <p class="lead">
            This example shows how to create beautiful ColumnChart
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
                'Date',
                'Cash Flow'
            ],
            [
                "2011-01-01",
                1.45
            ],
            [
                "2011-02-01",
                5.42
            ],
            [
                "2011-03-01",
                5.9
            ],
            [
                "2011-04-01",
                -0.42
            ],
            [
                "2011-05-01",
                -12.6
            ],
            [
                "2011-06-01",
                -18.1
            ],
            [
                "2011-07-01",
                -18.2
            ],
            [
                "2011-08-01",
                -14.16
            ],
            [
                "2011-09-01",
                -11.1
            ],
            [
                "2011-10-01",
                -6.09
            ],
            [
                "2011-11-01",
                0.34
            ],
            [
                "2011-12-01",
                3.88
            ],
            [
                "2012-01-01",
                13.07
            ],
            [
                "2012-02-01",
                5.8
            ],
            [
                "2012-03-01",
                2
            ],
            [
                "2012-04-01",
                7.37
            ],
            [
                "2012-05-01",
                8.1
            ],
            [
                "2012-06-01",
                13.57
            ],
            [
                "2012-07-01",
                15.75
            ],
            [
                "2012-08-01",
                17.1
            ],
            [
                "2012-09-01",
                19.8
            ],
            [
                "2012-10-01",
                -27.03
            ],
            [
                "2012-11-01",
                -54.4
            ],
            [
                "2012-12-01",
                -47.2
            ],
            [
                "2013-01-01",
                -43.3
            ],
            [
                "2013-02-01",
                -18.6
            ],
            [
                "2013-03-01",
                -48.6
            ],
            [
                "2013-04-01",
                -41.1
            ],
            [
                "2013-05-01",
                -39.6
            ],
            [
                "2013-06-01",
                -37.6
            ],
            [
                "2013-07-01",
                -29.4
            ],
            [
                "2013-08-01",
                -21.4
            ],
            [
                "2013-09-01",
                -2.4
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "Date" => [
                    'categoryType' => 'category',
                ],
                "Cash Flow"
            ),
            "options" => [
                'plotOptions | bar' => [
                    'colors | ranges' => [
                        [
                            'from' => -100,
                            'to' => -46,
                            'color' => '#F15B46'
                        ],
                        [
                            'from' => -45,
                            'to' => 0,
                            'color' => '#FEB019'
                        ]
                    ],
                    'columnWidth' => '80%',
                    'dataLabels' => [
                        'orientation' => 'vertical',
                        'position' => 'top'
                    ]
                ],
                'dataLabels | style' => [
                    'fontSize' => '12px',
                    'colors' => [
                        '#000000'
                    ]
                ],
                'yaxis | labels | formatter' => 'function (y) {
                    return y.toFixed(0) + "%";
                }',
                'xaxis' => [
                    'labels' => [
                        'rotate' => -90
                    ]
                ]
            ],
            "yTitle" => "Growth",
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>