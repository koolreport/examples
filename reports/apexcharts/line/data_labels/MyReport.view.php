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
        $temperature_series = [
            [
                "month",
                'High - 2013',
                'Low - 2013'
            ],
            [
                "Jan",
                28,
                12
            ],
            [
                "Feb",
                29,
                11
            ],
            [
                "Mar",
                33,
                14
            ],
            [
                "Apr",
                36,
                18
            ],
            [
                "May",
                32,
                17
            ],
            [
                "Jun",
                32,
                13
            ],
            [
                "Jul",
                33,
                13
            ]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Average High & Low Temperature",
            "dataSource" => $temperature_series,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "High - 2013" => array(
                    "type" => "number",
                    "suffix" => "°",
                ),
                "Low - 2013" => array(
                    "type" => "number",
                    "suffix" => "°",
                ),
            ),
            "options" => [
                'chart | dropShadow' => [
                    'enabled' => true,
                    'color' => '#000',
                    'top' => 18,
                    'left' => 7,
                    'blur' => 10,
                    'opacity' => 0.2
                ],
                'grid' => [
                    'borderColor' => '#e7e7e7',
                    'row' => [
                        'colors' => [
                            '#f3f3f3',
                            'transparent'
                        ],
                        'opacity' => 0.5
                    ]
                ],
                'yaxis' => [
                    'min' => 5,
                    'max' => 40
                ],
                'legend' => [
                    'position' => 'top',
                    'horizontalAlign' => 'left',
                    'floating' => true,
                    'offsetY' => -25,
                    'offsetX' => -5
                ]
            ],
            'colors' => [
                '#77B6EA',
                '#545454'
            ],
            "xTitle" => "Month",
            "yTitle" => "Temperature",
            "showLabel" => true,
            // "height" => "600px",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>