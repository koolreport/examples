<div class="report-content">
    <div class="text-center">
        <h1>DonutChart</h1>
        <p class="lead">
            This example shows how to create beautiful DonutChart
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
                'value'
            ],
            [
                44
            ],
            [
                55
            ],
            [
                41
            ],
            [
                17
            ],
            [
                15
            ]
        ];
        \koolreport\apexcharts\DonutChart::create(array(
            // "title" => "Pie Chart",
            "dataSource" => $data,
            "columns" => array(
                "value"
            ),
            "options" => [
                'plotOptions | pie' => [
                    'startAngle' => -90,
                    'endAngle' => 90,
                    'offsetY' => 10
                ],
                'grid | padding | bottom' => -80,
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | position' => 'bottom',
                    ]
                ]
            ],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>