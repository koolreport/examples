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
                'country',
                'series-1'
            ],
            [
                "South Korea",
                400
            ],
            [
                "Canada",
                430
            ],
            [
                "United Kingdom",
                448
            ],
            [
                "Netherlands",
                470
            ],
            [
                "Italy",
                540
            ],
            [
                "France",
                580
            ],
            [
                "Japan",
                690
            ],
            [
                "United States",
                1100
            ],
            [
                "China",
                1200
            ],
            [
                "Germany",
                1380
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "country",
                "series-1",
            ),
            "options" => [
                'plotOptions | bar' => [
                    'borderRadius' => 4,
                    'borderRadiusApplication' => 'end',
                ],
            ],
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>