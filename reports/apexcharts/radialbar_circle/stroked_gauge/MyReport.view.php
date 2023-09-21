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
                'Median Ratio',
                67
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
                'chart | offsetY' => -10,
                'plotOptions | radialBar' => [
                    'startAngle' => -135,
                    'endAngle' => 135,
                    'dataLabels | name' => [
                        'fontSize' => '16px',
                        'color' => null,
                        'offsetY' => 120
                    ],
                    'dataLabels | value' => [
                        'offsetY' => 76,
                        'fontSize' => '22px',
                        'color' => null,
                        'formatter' => 'function (val) {
                            return val + "%";
                        }'
                    ]
                ],
                'fill | gradient' => [
                    'shade' => 'dark',
                    'shadeIntensity' => 0.15,
                    'inverseColors' => false,
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [
                        0,
                        50,
                        65,
                        91
                    ]
                ],
                'stroke | dashArray' => 4,
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