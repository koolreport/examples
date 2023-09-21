<div class="report-content">
    <div class="text-center">
        <h1>CandleStickChart</h1>
        <p class="lead">
            This example shows how to create beautiful CandleStickChart
        </p>
    </div>
    <style>
        .apexcharts_wrapper>div,
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'date',
                'open',
                'high',
                'low',
                'close',
                'volume',
            ],
            [
                "2016/2/1",
                51.98,
                56.29,
                51.59,
                53.85,
                3.85
            ],
            [
                "2016/3/1",
                53.66,
                54.99,
                51.35,
                52.95,
                2.95
            ],
            [
                "2016/4/1",
                52.96,
                53.78,
                51.54,
                52.48,
                -12.48
            ],
            [
                "2016/5/1",
                52.54,
                52.79,
                47.88,
                49.24,
                19.24
            ],
            [
                "2016/6/1",
                49.1,
                52.86,
                47.7,
                52.78,
                12.78
            ],
            [
                "2016/7/1",
                52.83,
                53.48,
                50.32,
                52.29,
                22.29
            ],
            [
                "2016/8/1",
                52.2,
                54.48,
                51.64,
                52.58,
                -12.58
            ],
            [
                "2016/9/1",
                52.76,
                57.35,
                52.15,
                57.03,
                -17.03
            ],
            [
                "2016/10/1",
                57.04,
                58.15,
                48.88,
                56.19,
                -19.19
            ],
            [
                "2016/11/1",
                56.09,
                58.85,
                55.48,
                58.79,
                -28.79
            ],
            [
                "2016/12/1",
                58.78,
                59.65,
                58.23,
                59.05,
                -39.05
            ],
            [
                "2017/1/1",
                59.37,
                61.11,
                59.35,
                60.34,
                20.34
            ],
            [
                "2017/2/1",
                60.4,
                60.52,
                56.71,
                56.93,
                36.93
            ],
            [
                "2017/3/1",
                57.02,
                59.71,
                56.04,
                56.82,
                36.82
            ],
            [
                "2017/4/1",
                56.97,
                59.62,
                54.77,
                59.3,
                29.3
            ],
            [
                "2017/5/1",
                59.11,
                62.29,
                59.1,
                59.85,
                39.85
            ],
            [
                "2017/6/1",
                59.97,
                60.11,
                55.66,
                58.42,
                28.42
            ],
            [
                "2017/7/1",
                58.34,
                60.93,
                56.75,
                57.42,
                37.42
            ],
            [
                "2017/8/1",
                57.76,
                58.08,
                51.18,
                54.71,
                24.71
            ],
            [
                "2017/9/1",
                54.8,
                61.42,
                53.18,
                57.35,
                37.35
            ],
            [
                "2017/10/1",
                57.56,
                63.09,
                57,
                62.99,
                32.99
            ],
            [
                "2017/11/1",
                62.89,
                63.42,
                59.72,
                61.76,
                31.76
            ],
            [
                "2017/12/1",
                61.71,
                64.15,
                61.29,
                63.04,
                43.04
            ]
        ];
        \koolreport\apexcharts\BrushCharts::create(array(
            // "title" => "CandleStick Chart",
            "dataSource" => $data,
            "columns" => array(
                'date' => [
                    "categoryType" => "datetime",
                ],
                'candlestick' => [
                    'combination' => [
                        'open',
                        'high',
                        'low',
                        'close',
                    ],
                    'chartType' => 'candlestick',
                    'charts' => [1],
                ],
                'volume' => [
                    'chartType' => 'bar',
                    'charts' => [2],
                ]
            ),
            "brushMap" => [
                2 => 1,
            ],
            "options" => [
                'plotOptions' => [
                    'candlestick | colors' => [
                        'upward' => '#3C90EB',
                        'downward' => '#DF7D46'
                    ],
                    'bar | columnWidth' => '80%',
                    'bar | colors | ranges' => [
                        [
                            'from' => -1000,
                            'to' => 0,
                            'color' => '#F15B46'
                        ],
                        [
                            'from' => 1,
                            'to' => 10000,
                            'color' => '#FEB019'
                        ]
                    ]
                ]
            ],
            "settings_1" => [
                "options" => [],
                "height" => "400px",
            ],
            "settings_2" => [
                "options" => [
                    'xaxis | axisBorder | offsetX' => 13,
                    'yaxis | labels | show' => false,
                ],
                "strokeWidth" => 0,
                "height" => "200px",
            ],
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>