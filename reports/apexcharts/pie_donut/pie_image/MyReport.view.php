<div class="report-content">
    <div class="text-center">
        <h1>PieChart</h1>
        <p class="lead">
            This example shows how to create beautiful PieChart
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
                33
            ],
            [
                54
            ],
            [
                45
            ]
        ];
        \koolreport\apexcharts\PieChart::create(array(
            // "title" => "Pie Chart",
            "dataSource" => $data,
            "columns" => array(
                "value"
            ),
            "options" => [
                'fill | image' => [
                    'src' => [
                        '../pie_image/images/stripes.jpg',
                        '../pie_image/images/1101098.png',
                        '../pie_image/images/4679113782_ca13e2e6c0_z.jpg',
                        '../pie_image/images/2979121308_59539a3898_z.jpg'
                    ],
                    'width' => 25,
                    'imagedHeight' => 25,
                ],
                'dataLabels' => [
                    'style | colors' => ['#111'],
                    'background' => [
                        'enabled' => true,
                        'foreColor' => '#fff',
                        'borderWidth' => 0
                    ]
                ],
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | position' => 'bottom',
                    ],
                ],
            ],
            'colors' => [
                '#93C3EE',
                '#E5C6A0',
                '#669DB5',
                '#94A74A'
            ],
            'strokeWidth' => 4,
            'fillType' => 'image',
            'fillOpacity' => 0.85,
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>