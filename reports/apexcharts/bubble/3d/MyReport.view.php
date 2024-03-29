<div class="report-content">
    <div class="text-center">
        <h1>BubbleChart</h1>
        <p class="lead">
            This example shows how to create beautiful BubbleChart
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
                'Product1_x',
                'Product1_y',
                'Product1_z',

                'Product2_x',
                'Product2_y',
                'Product2_z',

                'Product3_x',
                'Product3_y',
                'Product3_z',

                'Product4_x',
                'Product4_y',
                'Product4_z',
            ],
            [
                "2017/2/11",
                10,
                46,
                "2017/2/11",
                29,
                31,
                "2017/2/11",
                49,
                31,
                "2017/2/11",
                51,
                47
            ],
            [
                "2017/2/12",
                47,
                31,
                "2017/2/12",
                27,
                54,
                "2017/2/12",
                43,
                70,
                "2017/2/12",
                16,
                39
            ],
            [
                "2017/2/13",
                29,
                26,
                "2017/2/13",
                28,
                18,
                "2017/2/13",
                33,
                41,
                "2017/2/13",
                16,
                64
            ],
            [
                "2017/2/14",
                59,
                46,
                "2017/2/14",
                36,
                24,
                "2017/2/14",
                56,
                43,
                "2017/2/14",
                29,
                19
            ],
            [
                "2017/2/15",
                37,
                30,
                "2017/2/15",
                33,
                35,
                "2017/2/15",
                59,
                34,
                "2017/2/15",
                40,
                35
            ],
            [
                "2017/2/16",
                15,
                64,
                "2017/2/16",
                19,
                18,
                "2017/2/16",
                50,
                67,
                "2017/2/16",
                22,
                38
            ],
            [
                "2017/2/17",
                55,
                42,
                "2017/2/17",
                60,
                48,
                "2017/2/17",
                47,
                49,
                "2017/2/17",
                26,
                52
            ],
            [
                "2017/2/18",
                22,
                30,
                "2017/2/18",
                14,
                75,
                "2017/2/18",
                52,
                47,
                "2017/2/18",
                20,
                32
            ],
            [
                "2017/2/19",
                19,
                34,
                "2017/2/19",
                32,
                57,
                "2017/2/19",
                25,
                35,
                "2017/2/19",
                60,
                26
            ],
            [
                "2017/2/20",
                15,
                64,
                "2017/2/20",
                19,
                48,
                "2017/2/20",
                25,
                42,
                "2017/2/20",
                43,
                46
            ],
            [
                "2017/2/21",
                37,
                66,
                "2017/2/21",
                60,
                26,
                "2017/2/21",
                38,
                54,
                "2017/2/21",
                50,
                22
            ],
            [
                "2017/2/22",
                47,
                19,
                "2017/2/22",
                44,
                39,
                "2017/2/22",
                13,
                44,
                "2017/2/22",
                28,
                28
            ],
            [
                "2017/2/23",
                37,
                22,
                "2017/2/23",
                32,
                60,
                "2017/2/23",
                33,
                15,
                "2017/2/23",
                25,
                25
            ],
            [
                "2017/2/24",
                53,
                43,
                "2017/2/24",
                19,
                64,
                "2017/2/24",
                45,
                38,
                "2017/2/24",
                58,
                59
            ],
            [
                "2017/2/25",
                34,
                42,
                "2017/2/25",
                51,
                20,
                "2017/2/25",
                32,
                72,
                "2017/2/25",
                40,
                46
            ],
            [
                "2017/2/26",
                21,
                15,
                "2017/2/26",
                11,
                23,
                "2017/2/26",
                16,
                41,
                "2017/2/26",
                34,
                37
            ],
            [
                "2017/2/27",
                11,
                75,
                "2017/2/27",
                42,
                38,
                "2017/2/27",
                24,
                40,
                "2017/2/27",
                24,
                38
            ],
            [
                "2017/2/28",
                56,
                62,
                "2017/2/28",
                22,
                45,
                "2017/2/28",
                22,
                37,
                "2017/2/28",
                30,
                41
            ],
            [
                "2017/3/1",
                39,
                61,
                "2017/3/1",
                36,
                21,
                "2017/3/1",
                46,
                72,
                "2017/3/1",
                26,
                36
            ],
            [
                "2017/3/2",
                41,
                35,
                "2017/3/2",
                60,
                36,
                "2017/3/2",
                10,
                44,
                "2017/3/2",
                15,
                59
            ]
        ];
        \koolreport\apexcharts\BubbleChart::create(array(
            "title" => "3D Bubble Chart",
            "dataSource" => $data,
            "columns" => array(
                "Product1" => [
                    'combination' => [
                        'Product1_x',
                        'Product1_y',
                        'Product1_z',
                    ]
                ],
                "Product2" => [
                    'combination' => [
                        'Product2_x',
                        'Product2_y',
                        'Product2_z',
                    ]
                ],
                "Product3" => [
                    'combination' => [
                        'Product3_x',
                        'Product3_y',
                        'Product3_z',
                    ]
                ],
                "Product4" => [
                    'combination' => [
                        'Product4_x',
                        'Product4_y',
                        'Product4_z',
                    ]
                ],
            ),
            "options" => [
                'xaxis' => [
                    'tickAmount' => 12,
                    'type' => 'datetime',
                    'labels | rotate' => 0,
                ],
                'yaxis | max' => 70,
                'theme | palette' => 'palette2',
            ],
            'fillType' => 'gradient',
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>