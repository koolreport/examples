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
                'genre',
                'value'
            ],
            [
                "Comedy",
                44
            ],
            [
                "Action",
                55
            ],
            [
                "SciFi",
                41
            ],
            [
                "Drama",
                17
            ],
            [
                "Horror",
                15
            ]
        ];
        \koolreport\apexcharts\DonutChart::create(array(
            "title" => "Favourite Movie Type",
            "dataSource" => $data,
            "columns" => array(
                'genre',
                "value"
            ),
            "options" => [
                'chart | dropShadow' => [
                    'enabled' => true,
                    'color' => '#111',
                    'top' => -1,
                    'left' => 3,
                    'blur' => 3,
                    'opacity' => 0.2
                ],
                'plotOptions | pie | donut | labels' => [
                    'show' => true,
                    'total' => [
                        'showAlways' => true,
                        'show' => true
                    ]
                ],
                'dataLabels | dropShadow' => [
                    'blur' => 3,
                    'opacity' => 0.8
                ],
                'fill | pattern' => [
                    'enabled' => true,
                    'style' => [
                        'verticalLines',
                        'squares',
                        'horizontalLines',
                        'circles',
                        'slantedLines'
                    ]
                ],
                'states | hover | filter' => 'none',
                'title | align' => 'left',
                'theme | palette' => 'palette2',
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | position' => 'bottom',
                    ]
                ]
            ],
            'strokeWidth' => 0,
            'fillType' => 'pattern',
            'fillOpacity' => 1,
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>