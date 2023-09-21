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
                'series-1',
                'series-2',
            ],
            [
                "2001",
                44,
                53
            ],
            [
                "2002",
                55,
                32
            ],
            [
                "2003",
                41,
                33
            ],
            [
                "2004",
                64,
                52
            ],
            [
                "2005",
                22,
                13
            ],
            [
                "2006",
                43,
                44
            ],
            [
                "2007",
                21,
                32
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "year",
                "series-1",
                "series-2",
            ),
            "options" => [
                'plotOptions | bar | dataLabels | position' => 'top',
                'dataLabels' => [
                    'offsetX' => -6,
                    'style' => [
                        'fontSize' => '12px',
                        'colors' => [
                            '#fff'
                        ]
                    ]
                ],
                'stroke' => [
                    'show' => true,
                    'width' => 1,
                    'colors' => [
                        '#fff'
                    ]
                ],
                'tooltip' => [
                    'shared' => true,
                    'intersect' => false
                ],
            ],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            // "maxWidth" => "800px",
            // "height" => "430px"
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>