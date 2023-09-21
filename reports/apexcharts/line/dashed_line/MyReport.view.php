<div class="report-content">
    <div class="text-center">
        <h1>LineChart</h1>
        <p class="lead">
            This example shows how to create beautiful LineChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $page_stats = [
            [
                'date',
                'Session Duration',
                'Page Views',
                'Total Visits'
            ],
            [
                "01 Jan",
                45,
                35,
                87
            ],
            [
                "02 Jan",
                52,
                41,
                57
            ],
            [
                "03 Jan",
                38,
                62,
                74
            ],
            [
                "04 Jan",
                24,
                42,
                99
            ],
            [
                "05 Jan",
                33,
                13,
                75
            ],
            [
                "06 Jan",
                26,
                18,
                38
            ],
            [
                "07 Jan",
                21,
                29,
                62
            ],
            [
                "08 Jan",
                20,
                37,
                47
            ],
            [
                "09 Jan",
                6,
                36,
                82
            ],
            [
                "10 Jan",
                8,
                51,
                56
            ],
            [
                "11 Jan",
                15,
                32,
                45
            ],
            [
                "12 Jan",
                10,
                35,
                47
            ]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Page Statistics",
            "dataSource" => $page_stats,
            "columns" => array(
                "date" => [
                    "label" => "Date"
                ],
                "Session Duration" => [],
                "Page Views" => [],
                "Total Visits" => [],
            ),
            "options" => [
                'stroke | dashArray' => [0, 8, 5],
                'markers | hover | sizeOffset' => 6,
                "legend | tooltipHoverFormatter" => "function (val, opts) {
                    return val + ': <strong>' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + '</strong>'
                }",
                'tooltip' => [
                    'y' => [
                        [
                            'formatter' => 'function (val) {
                                return val;
                            }',
                            'title | formatter' => 'function (val) {
                                return val + " (mins)"
                            }',
                        ],
                        [
                            'title | formatter' => 'function (val) {
                                return val + " per session"
                            }',
                        ],
                        [
                            'title | formatter' => 'function (val) {
                                return val;
                            }',
                        ]
                    ]
                ]
            ],
            "strokeCurve" => "straight",
            "strokeWidth" => [5, 7, 5],
            'markersSize' => 0,
            // "showLabel" => true,
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>