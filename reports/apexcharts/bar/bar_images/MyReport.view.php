<div class="report-content">
    <div class="text-center">
        <h1>BarChart</h1>
        <p class="lead">
            This example shows how to create beautiful BarChart
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
                'coins'
            ],
            [
                2
            ],
            [
                4
            ],
            [
                3
            ],
            [
                4
            ],
            [
                3
            ],
            [
                5
            ],
            [
                5
            ],
            [
                6.5
            ],
            [
                6
            ],
            [
                5
            ],
            [
                4
            ],
            [
                5
            ],
            [
                8
            ],
            [
                7
            ],
            [
                7
            ],
            [
                8
            ],
            [
                8
            ],
            [
                10
            ],
            [
                9
            ],
            [
                9
            ],
            [
                12
            ],
            [
                12
            ],
            [
                11
            ],
            [
                12
            ],
            [
                13
            ],
            [
                14
            ],
            [
                16
            ],
            [
                14
            ],
            [
                15
            ],
            [
                17
            ],
            [
                19
            ],
            [
                21
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            "title" => "Paths filled by clipped image",
            "yTitle" => "Weight",
            "dataSource" => $data,
            "columns" => array(
                "coins",
            ),
            "options" => [
                "plotOptions | bar | barHeight" => "100%",
                'stroke | colors' => '#fff',
                'yaxis' => [
                    'axisBorder | show' => false,
                    'axisTicks | show' => false,
                    'labels | show' => false,
                ],
                'grid | position' => 'back',
                'title' => [
                    'align' => 'right',
                    'offsetY' => 30
                ],
                'fill | type' => 'image',
                'fill | image' => [
                    'src' => '../bar_images/images/4274635880_809a4b9d0d_z.jpg',
                    'width' => 466,
                    'height' => 406
                ],
                'tooltip | x | formatter' => "function () {
                    return '';
                }",
            ],
            "strokeWidth" => 0.2,
            "fillOpacity" => 0.87,
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>