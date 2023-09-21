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
                'company',
                'series-1'
            ],
            [
                "Vimeo",
                76
            ],
            [
                "Messenger",
                67
            ],
            [
                "Facebook",
                61
            ],
            [
                "LinkedIn",
                90
            ]
        ];
        \koolreport\apexcharts\RadialBarChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "company",
                "series-1"
            ),
            "options" => [
                'plotOptions | radialBar' => [
                    'offsetY' => 0,
                    'startAngle' => 0,
                    'endAngle' => 270,
                    'hollow' => [
                        'margin' => 5,
                        'size' => '30%',
                        'background' => 'transparent',
                        'image' => null
                    ],
                    'dataLabels' => [
                        'name | show' => false,
                        'value | show' => false,
                    ]
                ],
                'legend' => [
                    // 'floating' => true,
                    'fontSize' => '16px',
                    'position' => 'left',
                    'offsetX' => 140,
                    // 'offsetY' => 15,
                    'labels | useSeriesColors' => true,
                    'markers | size' => 0,
                    'formatter' => 'function(seriesName, opts) {
                        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
                    }',
                    'itemMargin | vertical' => 3,
                ],
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options | legend | show' => false,
                ]
            ],
            'colors' => [
                '#1ab7ea',
                '#0084ff',
                '#39539E',
                '#0077B5'
            ],
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "500px",
        ));
        ?>
    </div>

</div>