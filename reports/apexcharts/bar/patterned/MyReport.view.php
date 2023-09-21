<div class="report-content">
    <div class="text-center">
        <h1>LineChart</h1>
        <p class="lead">
            This example shows how to create beautiful LineChart
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
            "title" => "Compare Sales Strategy",
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
                'chart | dropShadow' => [
                    'enabled' => true,
                    'blur' => 1,
                    'opacity' => 0.25
                ],
                'plotOptions | bar | barHeight' => '60%',
                'tooltip' => [
                    'shared' => false,
                    'y | formatter' => 'function (val) {
                        return val + "K";
                    }'
                ],
                'fill | type' => 'pattern',
                'fill | pattern | style' => [
                    'circles',
                    'slantedLines',
                    'verticalLines',
                    'horizontalLines'
                ],
                'states | hover | filter' =>'none',
                'legend' => [
                    'position' => 'right',
                    'offsetY' => 40
                ]
            ],
            "stacked" => true,
            "strokeWidth" => 2,
            "fillOpacity" => 1,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>