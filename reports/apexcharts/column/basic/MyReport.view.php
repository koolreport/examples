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
                'month',
                'Net Profit',
                'Revenue',
                'Free Cash Flow'
            ],
            [
                "Feb",
                44,
                76,
                35
            ],
            [
                "Mar",
                55,
                85,
                41
            ],
            [
                "Apr",
                57,
                101,
                36
            ],
            [
                "May",
                56,
                98,
                26
            ],
            [
                "Jun",
                61,
                87,
                45
            ],
            [
                "Jul",
                58,
                105,
                48
            ],
            [
                "Aug",
                63,
                91,
                52
            ],
            [
                "Sep",
                60,
                114,
                53
            ],
            [
                "Oct",
                66,
                94,
                41
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "Net Profit",
                "Revenue",
                "Free Cash Flow"
            ),
            "options" => [
                "stroke | colors" => 'transparent',
                "tooltip | y | formatter" => 'function (val) {
                    return "$ " + val + " thousands";
                }',
                'plotOptions | bar' => [
                    'columnWidth' => '55%',
                    'endingShape' => 'rounded',
                ],

                // 'a | b | c | d1 | e | f' => 'value',
                // 'a | b | c | d2 | e | f' => 'value',

                // 'a -> b -> c' => [
                //     'd1 -> e -> f' => 'value',
                //     'd2 -> e -> f' => 'value',
                // ],
                
                // 'a' => [
                //     'b' => [
                //         'c' => [
                //             'd1 | e | f' => 'value',
                //             'd2 | e | f' =>'value',
                //         ]
                //     ]
                // ],

                // 'a' => [
                //     'b' => [
                //         'c' => [
                //             'd1' => [
                //                 'e' => [
                //                     'f' => 'value'
                //                 ]
                //             ],
                //             'd2' => [
                //                 'e' => [
                //                     'f' => 'value'
                //                 ]
                //             ],
                //         ]
                //     ]
                // ],

                // 'plotOptions' => [
                //     'bar' => [
                //         'columnWidth' => '55%',
                //         'endingShape' => 'rounded'
                //     ]
                // ],
                // 'stroke' => [
                //     'colors' => 'transparent',
                // ],
                // 'tooltip' => [
                //     'y' => [
                //         'formatter' => 'function (val) {
                //             return "$ " + val + " thousands";
                //         }'
                //     ]
                // ]
            ],
            "yTitle" => "$ (thousands)",
            "showStroke" => true,
            "strokeWidth" => 2,
            "fillOpacity" => 0.75,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>