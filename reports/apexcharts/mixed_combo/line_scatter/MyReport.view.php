<div class="report-content">
    <div class="text-center">
        <h1>ComboChart</h1>
        <p class="lead">
            This example shows how to create beautiful ComboChart
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
                'line_category',
                'line_value',
                'scatter_x',
                'scatter_y',
            ],
            [
                1,
                2,
                1,
                2.14
            ],
            [
                3,
                3,
                1.2,
                2.19
            ],
            [
                3,
                4,
                1.8,
                2.43
            ],
            [
                5,
                5,
                2.3,
                3.8
            ],
            [
                5,
                6,
                2.6,
                4.14
            ],
            [
                7,
                7,
                2.9,
                5.4
            ],
            [
                7,
                8,
                3.2,
                5.8
            ],
            [
                9,
                9,
                3.8,
                6.04
            ],
            [
                9,
                10,
                4.55,
                6.77
            ],
            [
                11,
                11,
                4.9,
                8.1
            ],
            [
                null,
                null,
                5.1,
                9.4
            ],
            [
                null,
                null,
                7.1,
                7.14
            ],
            [
                null,
                null,
                9.18,
                8.4
            ]
        ];
        \koolreport\apexcharts\ComboChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "line_category" => [
                    "label" => "Line Category",
                ],
                "line_value" => [
                    "label" => "Line Value",
                    "chartType" => "line",
                ],
                'scatter' => [
                    "label" => "Scatter",
                    'combination' => [
                        "scatter_x",
                        "scatter_y",
                    ],
                    'chartType' => 'scatter',
                ]
            ),
            "options" => [
                "xaxis" => [
                    "min" => 0,
                    "max" => 12,
                ],
            ],
            "strokeCurve" => "straight",
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>