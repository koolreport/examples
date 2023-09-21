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
                'Percent',
                75
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
                'plotOptions | radialBar' => [
                    'startAngle' => -135,
                    'endAngle' => 225,
                ],
                'plotOptions | radialBar | hollow' => [
                    'margin' => 0,
                    'size' => '70%',
                    'background' => '#fff',
                    'image' => null,
                    'imageOffsetX' => 0,
                    'imageOffsetY' => 0,
                    'position' => 'front',
                    'dropShadow' => [
                        'enabled' => true,
                        'top' => 3,
                        'left' => 0,
                        'blur' => 4,
                        'opacity' => 0.24
                    ]
                ],
                'plotOptions | radialBar | track' => [
                    'background' => '#fff',
                    'strokeWidth' => '67%',
                    'margin' => 0,
                    'dropShadow' => [
                        'enabled' => true,
                        'top' => -3,
                        'left' => 0,
                        'blur' => 4,
                        'opacity' => 0.35
                    ]
                ],
                'plotOptions | radialBar | dataLabels' => [
                    'show' => true,
                    'name' => [
                        'offsetY' => -10,
                        'show' => true,
                        'color' => '#888',
                        'fontSize' => '17px'
                    ],
                    'value' => [
                        'formatter' => 'function(val) {
                                return parseInt(val);
                            }',
                        'color' => '#111',
                        'fontSize' => '36px',
                        'show' => true
                    ]
                ],
                'fill | gradient' => [
                    'shade' => 'dark',
                    'type' => 'horizontal',
                    'shadeIntensity' => 0.5,
                    'gradientToColors' => [
                        '#ABE5A1'
                    ],
                    'inverseColors' => true,
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [
                        0,
                        100
                    ]
                ],
                'stroke | lineCap' => 'round',
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