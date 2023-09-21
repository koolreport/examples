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
                'category',
                "W1",
                "W2",
                "W3",
                "W4",
                "W5",
                "W6",
                "W7",
                "W8",
                "W9",
                "W10",
                "W11",
                "W12",
                "W13",
                "W14",
                "W15"
            ],
            [
                "13:30",
                0,
                63,
                35,
                40,
                85,
                11,
                38,
                26,
                37,
                22,
                33,
                64,
                85,
                1,
                43
            ],
            [
                "13:00",
                72,
                78,
                67,
                50,
                75,
                48,
                27,
                31,
                28,
                40,
                51,
                59,
                5,
                44,
                41
            ],
            [
                "12:30",
                46,
                47,
                9,
                89,
                31,
                69,
                24,
                60,
                83,
                42,
                40,
                83,
                42,
                88,
                29
            ],
            [
                "12:00",
                90,
                17,
                62,
                36,
                39,
                67,
                16,
                73,
                73,
                8,
                2,
                12,
                58,
                34,
                22
            ],
            [
                "11:30",
                4,
                48,
                14,
                41,
                29,
                17,
                5,
                89,
                49,
                8,
                90,
                39,
                63,
                16,
                49
            ],
            [
                "11:00",
                21,
                1,
                2,
                90,
                83,
                71,
                51,
                70,
                56,
                31,
                34,
                24,
                32,
                58,
                33
            ],
            [
                "10:30",
                22,
                17,
                29,
                9,
                73,
                48,
                76,
                67,
                7,
                49,
                11,
                78,
                42,
                42,
                40
            ],
            [
                "10:00",
                0,
                47,
                66,
                23,
                34,
                17,
                88,
                46,
                48,
                23,
                9,
                74,
                81,
                41,
                22
            ]
        ];
        $transposeData = \koolreport\core\Utility::transpose($data);
        // \koolreport\core\Utility::prettyPrint($transposeData);
        \koolreport\apexcharts\HeatMapChart::create(array(
            "title" => "Color Scales flipped Vertically",
            // "dataSource" => $data,
            // "columns" => $data[0],
            "dataSource" => $transposeData,
            "columns" => $transposeData[0],
            "options" => [
                'plotOptions | heatmap | colorScale | inverse' => true,
            ],
            'colors' => [
                '#F3B415',
                '#F27036',
                '#663F59',
                '#6A6E94',
                '#4E88B4',
                '#00A7C6',
                '#18D8D8',
                '#A9D794',
                '#46AF78',
                '#A93F55',
                '#8C5E58',
                '#2176FF',
                '#33A1FD',
                '#7A918D',
                '#BAFF29'
            ],
            'widthHeightAutoRatio' => 1.75,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "400px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>