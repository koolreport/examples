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
                'year',
                'Marine Sprite',
                'Striking Calf',
                'Tank Picture',
                'Bucket Slope',
                'Reborn Kid',
            ],
            [
                2008,
                44,
                53,
                12,
                9,
                25
            ],
            [
                2009,
                55,
                32,
                17,
                7,
                12
            ],
            [
                2010,
                41,
                33,
                11,
                5,
                19
            ],
            [
                2011,
                37,
                52,
                9,
                8,
                32
            ],
            [
                2012,
                22,
                13,
                15,
                6,
                25
            ],
            [
                2013,
                43,
                43,
                11,
                9,
                24
            ],
            [
                2014,
                21,
                32,
                20,
                4,
                10
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            "title" => "Fiction Books Sales",
            "dataSource" => $data,
            "columns" => array(
                'year',
                'Marine Sprite',
                'Striking Calf',
                'Tank Picture',
                'Bucket Slope',
                'Reborn Kid',
            ),
            "options" => [
                'plotOptions | bar | dataLabels | total' => [
                    'enabled' => true,
                    'offsetX' => 0,
                    'style | fontSize' => '13px',
                    'style | fontWeight' => 900,
                ],
                'stroke | colors' => [
                    '#fff'
                ],
                'xaxis | labels | formatter' => 'function (val) {
                    return val + "K"
                }',
                'tooltip | y | formatter' => 'function (val) {
                    return val + "K"
                }',
                'legend' => [
                    'position' => 'top',
                    'horizontalAlign' => 'left',
                    'offsetX' => 40
                ]
            ],
            "stacked" => true,
            "yTitle" => null,
            "strokeWidth" => 1,
            "fillOpacity" => 1,
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>