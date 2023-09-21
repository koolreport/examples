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
            "title" => "Gradient Donut with custom Start-angle",
            "dataSource" => $data,
            "columns" => array(
                "value"
            ),
            "options" => [
                'plotOptions | pie' => [
                    'startAngle' => -90,
                    'endAngle' => 270
                ],
                'legend | formatter' => 'function(val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }',
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | position' => 'bottom',
                    ]
                ],
                "title | align" => "left",
            ],
            'fillType' => 'gradient',
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>