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
                'month',
                'series-1'
            ],
            [
                "June",
                400
            ],
            [
                "July",
                430
            ],
            [
                "August",
                448
            ],
            [
                "September",
                470
            ],
            [
                "October",
                540
            ],
            [
                "November",
                580
            ],
            [
                "December",
                690
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "month",
                "series-1",
            ),
            "options" => [
                'annotations | xaxis | 0' => [
                    'x' => 500,
                    'borderColor' => '#00E396',
                    'label' => [
                        'borderColor' => '#00E396',
                        'style | color' => '#fff',
                        'style | background' => '#00E396',
                        'text' => 'X annotation'
                    ]
                ],
                'annotations | yaxis | 0' => [
                    'y' => 'July',
                    'y2' => 'September',
                    'label | text' => 'Y annotation',
                ],
                'grid | xaxis | lines | show' => true,
                'yaxis' => [
                    'reversed' => true,
                    'axisTicks | show' => true,
                ]
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>