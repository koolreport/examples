<div class="report-content">
    <div class="text-center">
        <h1>HeatMapChart</h1>
        <p class="lead">
            This example shows how to create beautiful HeatMapChart
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
                "Metric1",
                "Metric2",
                "Metric3",
                "Metric4",
                "Metric5",
                "Metric6",
                "Metric7",
                "Metric8",
                "Metric9"
            ],
            [
                0,
                48,
                34,
                90,
                69,
                51,
                74,
                71,
                37
            ],
            [
                47,
                76,
                24,
                17,
                24,
                59,
                48,
                11,
                0
            ],
            [
                66,
                67,
                32,
                62,
                60,
                5,
                11,
                32,
                31
            ],
            [
                23,
                7,
                58,
                36,
                83,
                44,
                36,
                20,
                48
            ],
            [
                34,
                49,
                33,
                39,
                42,
                41,
                11,
                27,
                17
            ],
            [
                17,
                11,
                4,
                67,
                40,
                0,
                73,
                15,
                79
            ],
            [
                88,
                78,
                48,
                16,
                83,
                63,
                35,
                87,
                83
            ],
            [
                46,
                42,
                14,
                73,
                42,
                35,
                6,
                66,
                87
            ],
            [
                48,
                42,
                41,
                73,
                88,
                40,
                54,
                53,
                72
            ],
            [
                23,
                40,
                29,
                8,
                29,
                85,
                30,
                47,
                21
            ],
            [
                9,
                21,
                17,
                2,
                72,
                11,
                23,
                44,
                46
            ],
            [
                74,
                1,
                5,
                12,
                78,
                38,
                35,
                33,
                17
            ],
            [
                81,
                2,
                89,
                58,
                67,
                26,
                28,
                26,
                79
            ],
            [
                41,
                90,
                49,
                34,
                50,
                37,
                56,
                35,
                73
            ],
            [
                22,
                83,
                8,
                22,
                75,
                22,
                18,
                37,
                89
            ],
            [
                22,
                71,
                90,
                46,
                48,
                33,
                25,
                39,
                31
            ],
            [
                17,
                51,
                39,
                47,
                27,
                64,
                90,
                29,
                57
            ],
            [
                29,
                70,
                63,
                9,
                31,
                85,
                17,
                32,
                61
            ],
            [
                9,
                56,
                16,
                89,
                28,
                1,
                60,
                9,
                81
            ],
            [
                73,
                31,
                49,
                31,
                40,
                43,
                46,
                66,
                11
            ]
        ];
        \koolreport\apexcharts\HeatMapChart::create(array(
            "title" => "Rounded (Range without Shades)",
            "dataSource" => $data,
            "columns" => array(
                "Metric1",
                "Metric2",
                "Metric3",
                "Metric4",
                "Metric5",
                "Metric6",
                "Metric7",
                "Metric8",
                "Metric9"
            ),
            "autoCategoryColumn" => "numeric",
            "options" => [
                'plotOptions | heatmap' => [
                    'radius' => 30,
                    'enableShades' => false,
                    'colorScale | ranges' => [
                        [
                            'from' => 0,
                            'to' => 50,
                            'color' => '#008FFB'
                        ],
                        [
                            'from' => 51,
                            'to' => 100,
                            'color' => '#00E396'
                        ]
                    ]
                ],
                'dataLabels | style | colors' => ['#fff'],
            ],
            'widthHeightAutoRatio' => 1.9,
            'strokeWidth' => 0,
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "400px",
            // "width" => "85%",
            "maxWidth" => "800px",
            "mobileMaxWidth" => "100%",
        ));
        ?>
    </div>

</div>