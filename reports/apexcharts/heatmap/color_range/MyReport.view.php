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
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep"
            ],
            [
                -30,
                15,
                2,
                55,
                36,
                18,
                40,
                37,
                5
            ],
            [
                15,
                42,
                -8,
                -14,
                -8,
                26,
                15,
                -20,
                -30
            ],
            [
                33,
                33,
                0,
                28,
                27,
                -25,
                -20,
                0,
                0
            ],
            [
                -8,
                -24,
                25,
                4,
                48,
                12,
                4,
                -11,
                16
            ],
            [
                2,
                16,
                1,
                7,
                10,
                9,
                -19,
                -5,
                -14
            ],
            [
                -14,
                -19,
                -26,
                34,
                7,
                -30,
                39,
                -16,
                44
            ],
            [
                53,
                44,
                15,
                -15,
                49,
                30,
                3,
                52,
                48
            ],
            [
                14,
                9,
                -17,
                39,
                10,
                3,
                -24,
                32,
                52
            ],
            [
                15,
                10,
                9,
                39,
                54,
                8,
                21,
                20,
                38
            ],
            [
                -8,
                8,
                -2,
                -22,
                -3,
                50,
                -2,
                14,
                -10
            ],
            [
                -21,
                -10,
                -14,
                -28,
                38,
                -20,
                -9,
                12,
                13
            ],
            [
                40,
                -29,
                -25,
                -19,
                44,
                6,
                3,
                1,
                -14
            ],
            [
                47,
                -29,
                54,
                24,
                33,
                -5,
                -3,
                -5,
                44
            ],
            [
                8,
                55,
                16,
                2,
                17,
                5,
                23,
                3,
                39
            ],
            [
                -9,
                48,
                -23,
                -9,
                41,
                -10,
                -13,
                5,
                54
            ],
            [
                -9,
                37,
                55,
                13,
                15,
                1,
                -6,
                6,
                -1
            ],
            [
                -14,
                19,
                7,
                14,
                -4,
                31,
                55,
                -3,
                24
            ],
            [
                -3,
                36,
                30,
                -22,
                -1,
                50,
                -14,
                0,
                28
            ],
            [
                -22,
                23,
                -14,
                54,
                -4,
                -29,
                26,
                -21,
                46
            ],
            [
                39,
                -1,
                16,
                -1,
                8,
                11,
                14,
                32,
                -20
            ]
        ];
        \koolreport\apexcharts\HeatMapChart::create(array(
            // "name" => "HeatMap1",
            "title" => "HeatMap Chart with Color Range",
            "dataSource" => $data,
            "columns" => array(
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep"
            ),
            "autoCategoryColumn" => "numeric",
            "options" => [
                'plotOptions | heatmap' => [
                    'shadeIntensity' => 0.5,
                    'radius' => 0,
                    'useFillColorAsStroke' => true,
                    'colorScale | ranges' => [
                        [
                            'from' => -30,
                            'to' => 5,
                            'name' => 'low',
                            'color' => '#00A100'
                        ],
                        [
                            'from' => 6,
                            'to' => 20,
                            'name' => 'medium',
                            'color' => '#128FD9'
                        ],
                        [
                            'from' => 21,
                            'to' => 45,
                            'name' => 'high',
                            'color' => '#FFB200'
                        ],
                        [
                            'from' => 46,
                            'to' => 55,
                            'name' => 'extreme',
                            'color' => '#FF0000'
                        ]
                    ]
                ],

            ],
            'widthHeightAutoRatio' => 1.9,
            'strokeWidth' => 1,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "400px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>