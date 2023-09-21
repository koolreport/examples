<div class="report-content">
    <div class="text-center">
        <h1>RadialBarChart</h1>
        <p class="lead">
            This example shows how to create beautiful RadialBarChart
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
                'label',
                'series-1'
            ],
            [
                'Average Results',
                76
            ]
        ];
        \koolreport\apexcharts\RadialBarChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "label",
                "series-1"
            ),
            "options" => [
                'chart' => [
                    'offsetY' => -20,
                    'sparkline | enabled' => true,
                ],
                'plotOptions | radialBar' => [
                    'startAngle' => -90,
                    'endAngle' => 90,
                    'track' => [
                        'background' => '#e7e7e7',
                        'strokeWidth' => '97%',
                        'margin' => 5,
                        'dropShadow' => [
                            'enabled' => true,
                            'top' => 2,
                            'left' => 0,
                            'color' => '#999',
                            'opacity' => 1,
                            'blur' => 2
                        ]
                    ],
                    'dataLabels' => [
                        'name | show' => false,
                        'value' => [
                            'offsetY' => -2,
                            'fontSize' => '22px'
                        ]
                    ]
                ],
                'grid | padding | top' => -10,
                'fill | gradient' => [
                    'shade' => 'light',
                    'shadeIntensity' => 0.4,
                    'inverseColors' => false,
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [
                        0,
                        50,
                        53,
                        91
                    ]
                ]
            ],
            'fillType' => 'gradient',
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>