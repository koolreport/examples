<div class="report-content">
    <div class="text-center">
        <h1>TreeMapChart</h1>
        <p class="lead">
            This example shows how to create beautiful TreeMapChart
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
                'series-1'
            ],
            [
                "INTC",
                1.2
            ],
            [
                "GS",
                0.4
            ],
            [
                "CVX",
                -1.4
            ],
            [
                "GE",
                2.7
            ],
            [
                "CAT",
                -0.3
            ],
            [
                "RTX",
                5.1
            ],
            [
                "CSCO",
                -2.3
            ],
            [
                "JNJ",
                2.1
            ],
            [
                "PG",
                0.3
            ],
            [
                "TRV",
                0.12
            ],
            [
                "MMM",
                -2.31
            ],
            [
                "NKE",
                3.98
            ],
            [
                "IYT",
                1.67
            ]
        ];
        \koolreport\apexcharts\TreeMapChart::create(array(
            "title" => "Treemap with Color scale",
            "dataSource" => $data,
            "columns" => array(
                "category",
                "series-1",
            ),
            "options" => [
                'dataLabels' => [
                    'style | fontSize' => '12px',
                    'formatter' => 'function(text, op) {
                        return [text, op.value]
                    }',
                    'offsetY' => -4
                ],
                'plotOptions | treemap' => [
                    'enableShades' => true,
                    'shadeIntensity' => 0.5,
                    'reverseNegativeShade' => true,
                    'colorScale | ranges' => [
                        [
                            'from' => -6,
                            'to' => 0,
                            'color' => '#CD363A'
                        ],
                        [
                            'from' => 0.001,
                            'to' => 6,
                            'color' => '#52B12C'
                        ]
                    ]
                ]
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>