<div class="report-content">
    <div class="text-center">
        <h1>ColumnChart</h1>
        <p class="lead">
            This example shows how to create beautiful ColumnChart
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
                'Fruit',
                'Servings'
            ],
            [
                "Apples",
                44
            ],
            [
                "Oranges",
                55
            ],
            [
                "Strawberries",
                41
            ],
            [
                "Pineapples",
                67
            ],
            [
                "Mangoes",
                22
            ],
            [
                "Bananas",
                43
            ],
            [
                "Blackberries",
                21
            ],
            [
                "Pears",
                33
            ],
            [
                "Watermelons",
                45
            ],
            [
                "Cherries",
                31
            ],
            [
                "Pomegranates",
                87
            ],
            [
                "Tangerines",
                65
            ],
            [
                "Papayas",
                35
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "Fruit",
                "Servings"
            ),
            "options" => [
                'plotOptions | bar' => [
                    'borderRadius' => 10,
                    'columnWidth' => '50%'
                ],
                'stroke | width' => 0,
                'grid | row | colors' => [
                    '#fff',
                    '#f2f2f2'
                ],
                'xaxis' => [
                    // 'labels | rotate' => -45, // only rotate when width is too small for horizontal labels
                    'labels | rotateAlways' => -45,
                    'tickPlacement' => 'on'
                ],
                'fill | type' => 'gradient',
                'fill | gradient' => [
                    'shade' => 'light',
                    'type' => 'horizontal',
                    'shadeIntensity' => 0.25,
                    'gradientToColors' => null,
                    'inverseColors' => true,
                    'opacityFrom' => 0.85,
                    'opacityTo' => 0.85,
                    'stops' => [
                        50,
                        0,
                        100
                    ]
                ]
            ],
            "yTitle" => "Servings",
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>