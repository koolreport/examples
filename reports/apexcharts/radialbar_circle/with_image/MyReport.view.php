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
                'Volatility',
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
                'plotOptions | radialBar' => [
                    'hollow' => [
                        'margin' => 15,
                        'size' => '70%',
                        'image' => './images/clock.png',
                        'imageWidth' => 64,
                        'imageHeight' => 64,
                        'imageClipped' => false
                    ],
                    'dataLabels | name' => [
                        'show' => false,
                        'color' => '#fff'
                    ],
                    'dataLabels | value' => [
                        'show' => true,
                        'color' => '#333',
                        'offsetY' => 70,
                        'fontSize' => '22px'
                    ]
                ],
                'fill | image' => [
                    'src' => '../with_image/images/4274635880_809a4b9d0d_z.jpg',
                ],
                'stroke | lineCap' => 'round',
            ],
            'fillType' => 'image',
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>