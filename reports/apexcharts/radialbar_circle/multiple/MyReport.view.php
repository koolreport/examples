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
                'fruit',
                'series-1'
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
                "Bananas",
                67
            ],
            [
                "Berries",
                83
            ]
        ];
        \koolreport\apexcharts\RadialBarChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "fruit",
                "series-1"
            ),
            "options" => [
                'plotOptions | radialBar | dataLabels' => [
                    'name | fontSize' => '22px',
                    'value | fontSize' => '16px',
                    'total' => [
                        'show' => true,
                        'label' => 'Total',
                        'formatter' => 'function (w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return 249;
                        }'
                    ]
                ]
            ],
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>