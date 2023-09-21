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
                'Metric_name',
                'Metrix_x',
                'Metrix_y',
            ],
            [
                "W15",
                "1",
                26
            ],
            [
                "W15",
                "2",
                37
            ],
            [
                "W15",
                "3",
                22
            ],
            [
                "W15",
                "4",
                33
            ],
            [
                "W15",
                "5",
                64
            ],
            [
                "W15",
                "6",
                85
            ],
            [
                "W15",
                "7",
                1
            ],
            [
                "W15",
                "8",
                43
            ],
            [
                "W14",
                "1",
                41
            ],
            [
                "W14",
                "2",
                0
            ],
            [
                "W14",
                "3",
                63
            ],
            [
                "W14",
                "4",
                35
            ],
            [
                "W14",
                "5",
                40
            ],
            [
                "W14",
                "6",
                85
            ],
            [
                "W14",
                "7",
                11
            ],
            [
                "W14",
                "8",
                38
            ],
            [
                "W13",
                "1",
                27
            ],
            [
                "W13",
                "2",
                31
            ],
            [
                "W13",
                "3",
                28
            ],
            [
                "W13",
                "4",
                40
            ],
            [
                "W13",
                "5",
                51
            ],
            [
                "W13",
                "6",
                59
            ],
            [
                "W13",
                "7",
                5
            ],
            [
                "W13",
                "8",
                44
            ],
            [
                "W12",
                "1",
                88
            ],
            [
                "W12",
                "2",
                29
            ],
            [
                "W12",
                "3",
                72
            ],
            [
                "W12",
                "4",
                78
            ],
            [
                "W12",
                "5",
                67
            ],
            [
                "W12",
                "6",
                50
            ],
            [
                "W12",
                "7",
                75
            ],
            [
                "W12",
                "8",
                48
            ],
            [
                "W11",
                "1",
                69
            ],
            [
                "W11",
                "2",
                24
            ],
            [
                "W11",
                "3",
                60
            ],
            [
                "W11",
                "4",
                83
            ],
            [
                "W11",
                "5",
                42
            ],
            [
                "W11",
                "6",
                40
            ],
            [
                "W11",
                "7",
                83
            ],
            [
                "W11",
                "8",
                42
            ],
            [
                "W10",
                "1",
                58
            ],
            [
                "W10",
                "2",
                34
            ],
            [
                "W10",
                "3",
                22
            ],
            [
                "W10",
                "4",
                46
            ],
            [
                "W10",
                "5",
                47
            ],
            [
                "W10",
                "6",
                9
            ],
            [
                "W10",
                "7",
                89
            ],
            [
                "W10",
                "8",
                31
            ],
            [
                "W9",
                "1",
                39
            ],
            [
                "W9",
                "2",
                67
            ],
            [
                "W9",
                "3",
                16
            ],
            [
                "W9",
                "4",
                73
            ],
            [
                "W9",
                "5",
                73
            ],
            [
                "W9",
                "6",
                8
            ],
            [
                "W9",
                "7",
                2
            ],
            [
                "W9",
                "8",
                12
            ],
            [
                "W8",
                "1",
                39
            ],
            [
                "W8",
                "2",
                63
            ],
            [
                "W8",
                "3",
                16
            ],
            [
                "W8",
                "4",
                49
            ],
            [
                "W8",
                "5",
                90
            ],
            [
                "W8",
                "6",
                17
            ],
            [
                "W8",
                "7",
                62
            ],
            [
                "W8",
                "8",
                36
            ],
            [
                "W7",
                "1",
                41
            ],
            [
                "W7",
                "2",
                29
            ],
            [
                "W7",
                "3",
                17
            ],
            [
                "W7",
                "4",
                5
            ],
            [
                "W7",
                "5",
                89
            ],
            [
                "W7",
                "6",
                49
            ],
            [
                "W7",
                "7",
                8
            ],
            [
                "W7",
                "8",
                90
            ],
            [
                "W6",
                "1",
                34
            ],
            [
                "W6",
                "2",
                24
            ],
            [
                "W6",
                "3",
                32
            ],
            [
                "W6",
                "4",
                58
            ],
            [
                "W6",
                "5",
                33
            ],
            [
                "W6",
                "6",
                4
            ],
            [
                "W6",
                "7",
                48
            ],
            [
                "W6",
                "8",
                14
            ],
            [
                "W5",
                "1",
                2
            ],
            [
                "W5",
                "2",
                90
            ],
            [
                "W5",
                "3",
                83
            ],
            [
                "W5",
                "4",
                71
            ],
            [
                "W5",
                "5",
                51
            ],
            [
                "W5",
                "6",
                70
            ],
            [
                "W5",
                "7",
                56
            ],
            [
                "W5",
                "8",
                31
            ],
            [
                "W4",
                "1",
                49
            ],
            [
                "W4",
                "2",
                11
            ],
            [
                "W4",
                "3",
                78
            ],
            [
                "W4",
                "4",
                42
            ],
            [
                "W4",
                "5",
                42
            ],
            [
                "W4",
                "6",
                40
            ],
            [
                "W4",
                "7",
                21
            ],
            [
                "W4",
                "8",
                1
            ],
            [
                "W3",
                "1",
                17
            ],
            [
                "W3",
                "2",
                29
            ],
            [
                "W3",
                "3",
                9
            ],
            [
                "W3",
                "4",
                73
            ],
            [
                "W3",
                "5",
                48
            ],
            [
                "W3",
                "6",
                76
            ],
            [
                "W3",
                "7",
                67
            ],
            [
                "W3",
                "8",
                7
            ],
            [
                "W2",
                "1",
                48
            ],
            [
                "W2",
                "2",
                23
            ],
            [
                "W2",
                "3",
                9
            ],
            [
                "W2",
                "4",
                74
            ],
            [
                "W2",
                "5",
                81
            ],
            [
                "W2",
                "6",
                41
            ],
            [
                "W2",
                "7",
                22
            ],
            [
                "W2",
                "8",
                22
            ],
            [
                "W1",
                "1",
                0
            ],
            [
                "W1",
                "2",
                47
            ],
            [
                "W1",
                "3",
                66
            ],
            [
                "W1",
                "4",
                23
            ],
            [
                "W1",
                "5",
                34
            ],
            [
                "W1",
                "6",
                17
            ],
            [
                "W1",
                "7",
                88
            ],
            [
                "W1",
                "8",
                46
            ]
        ];
        \koolreport\apexcharts\HeatMapChart::create(array(
            "title" => "HeatMap Chart (Different color shades for each series)",
            "dataSource" => $data,
            "columns" => array(
                "Metric_name" => [
                    "seriesGroup" => true,
                ],
                "Metrix_x" => [
                    'categoryType' => 'category',
                ],
                "Metrix_y" => [
                    'label' => ''
                ],
            ),
            "options" => [
                'xaxis | categories' => [
                    '10:00',
                    '10:30',
                    '11:00',
                    '11:30',
                    '12:00',
                    '12:30',
                    '01:00',
                    '01:30'
                ],
                'grid | padding | right' => 20,
            ],
            'colors' => [
                "#BAFF29", "#7A918D", "#33A1FD", "#2176FF", "#8C5E58",
                "#A93F55", "#46AF78", "#A9D794", "#18D8D8", "#00A7C6",
                "#4E88B4", "#6A6E94", "#663F59", "#F27036", "#F3B415"
            ],
            'widthHeightAutoRatio' => 1.5,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "400px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>