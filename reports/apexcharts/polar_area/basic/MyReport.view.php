<div class="report-content">
    <div class="text-center">
        <h1>PolarAreaChart</h1>
        <p class="lead">
            This example shows how to create beautiful PolarAreaChart
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
                'series-1'
            ],
            [
                14
            ],
            [
                23
            ],
            [
                21
            ],
            [
                17
            ],
            [
                15
            ],
            [
                10
            ],
            [
                12
            ],
            [
                17
            ],
            [
                21
            ]
        ];
        \koolreport\apexcharts\PolarAreaChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "series-1"
            ),
            "options" => [
                'stroke | colors' => [
                    '#fff'
                ],
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | position' => 'bottom',
                    ],
                ],
            ],
            'fillOpacity' => 0.8,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>