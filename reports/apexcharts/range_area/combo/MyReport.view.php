<div class="report-content">
    <div class="text-center">
        <h1>RangeAreaChart</h1>
        <p class="lead">
            This example shows how to create beautiful RangeAreaChart
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
                'month',
                'Team_A_min',
                'Team_A_max',
                'Team_A_med',
                'Team_B_min',
                'Team_B_max',
                'Team_B_med',
            ],
            [
                "Jan",
                3100,
                3400,
                3300,
                1100,
                1900,
                1500
            ],
            [
                "Feb",
                4200,
                5200,
                4900,
                1200,
                1800,
                1700
            ],
            [
                "Mar",
                3900,
                4900,
                4300,
                900,
                2900,
                1900
            ],
            [
                "Apr",
                3400,
                3900,
                3700,
                1400,
                2700,
                2200
            ],
            [
                "May",
                5100,
                5900,
                5500,
                2600,
                3900,
                3000
            ],
            [
                "Jun",
                5400,
                6700,
                5900,
                500,
                1700,
                1000
            ],
            [
                "Jul",
                4300,
                4600,
                4500,
                1900,
                2300,
                2100
            ],
            [
                "Aug",
                2100,
                2900,
                2400,
                1000,
                1500,
                1200
            ],
            [
                "Sep",
                null,
                null,
                2100,
                null,
                null,
                1800
            ],
            [
                "Oct",
                null,
                null,
                1500,
                null,
                null,
                2000
            ]
        ];
        \koolreport\apexcharts\ComboChart::create(array(
            "title" => "Range Area with Forecast Line (Combo)",
            "dataSource" => $data,
            "columns" => [
                'month' => [
                    'label' => 'Month',
                ],
                'Team_A_range' => [
                    'label' => 'Team A range',
                    'combination' => [
                        'Team_A_min',
                        'Team_A_max'
                    ],
                    'chartType' => 'rangeArea',
                ],
                'Team_B_range' => [
                    'label' => 'Team B range',
                    'combination' => [
                        'Team_B_min',
                        'Team_B_max'
                    ],
                    'chartType' => 'rangeArea',
                ],
                'Team_A_med' => [
                    'label' => 'Team A median',
                    'chartType' => 'line',
                ],
                'Team_B_med' => [
                    'label' => 'Team B median',
                    'chartType' => 'line',
                ],
            ],
            "options" => [
                'chart | animations | speed' => 500,
                'forecastDataPoints | count' => 2,
                'legend | customLegendItems' => [
                    'Team A',
                    'Team B',
                ],
                'markers | hover | sizeOffset' => 5,
            ],
            'colors' => [
                '#33b2df',
                '#d4526e',
                '#33b2df',
                '#d4526e',
            ],
            'strokeCurve' => 'straight',
            'strokeWidth' => [
                0,
                0,
                2,
                2,
            ],
            'fillOpacity' => [
                0.24,
                0.24,
                1,
                1,
            ],
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>