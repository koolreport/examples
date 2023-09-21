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
        $forecast_data = [
            [
                'date',
                'forecast'
            ],
            [
                "1/11/2000",
                4
            ],
            [
                "2/11/2000",
                3
            ],
            [
                "3/11/2000",
                10
            ],
            [
                "4/11/2000",
                9
            ],
            [
                "5/11/2000",
                29
            ],
            [
                "6/11/2000",
                19
            ],
            [
                "7/11/2000",
                22
            ],
            [
                "8/11/2000",
                9
            ],
            [
                "9/11/2000",
                12
            ],
            [
                "10/11/2000",
                7
            ],
            [
                "11/11/2000",
                19
            ],
            [
                "12/11/2000",
                5
            ],
            [
                "1/11/2001",
                13
            ],
            [
                "2/11/2001",
                9
            ],
            [
                "3/11/2001",
                17
            ],
            [
                "4/11/2001",
                2
            ],
            [
                "5/11/2001",
                7
            ],
            [
                "6/11/2001",
                5
            ]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Forecast",
            "dataSource" => $forecast_data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "forecast" => array(
                    "label" => "Forecast",
                    "type" => "number",
                    "prefix" => "$",
                ),
            ),
            "options" => [
                "forecastDataPoints | count" => 7,
                'fill | gradient' => [
                    'shade' => 'dark',
                    'gradientToColors' => ['#FDD835'],
                    'shadeIntensity' => 1,
                    'type' => 'horizontal',
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [0, 100, 100, 100]
                ],
                'yaxis' => [
                    'min' => -10,
                    'max' => 40
                ],
            ],
            "strokeWidth" => 5,
            'fillType' => 'gradient',
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>