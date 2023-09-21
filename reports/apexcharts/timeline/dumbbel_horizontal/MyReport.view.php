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
                'profession',
                'female',
                'male',
            ],
            [
                "Operations",
                2800,
                4500
            ],
            [
                "Customer Success",
                3200,
                4100
            ],
            [
                "Engineering",
                2950,
                7800
            ],
            [
                "Marketing",
                3000,
                4600
            ],
            [
                "Product",
                3500,
                4100
            ],
            [
                "Data Science",
                4500,
                6500
            ],
            [
                "Sales",
                4100,
                5600
            ]
        ];
        \koolreport\apexcharts\TimeLineChart::create(array(
            "title" => "Paygap Disparity",
            "dataSource" => $data,
            "columns" => array(
                'profession',
                'gap' => [
                    'combination' => [
                        'female',
                        'male',
                    ]
                ]
            ),
            "options" => [
                'chart | zoom | enabled' => false,
                'plotOptions | bar' => [
                    'isDumbbell' => true,
                    'dumbbellColors' => [
                        '#EC7D31',
                        '#36BDCB'
                    ]
                ],
                'legend' => [
                    'showForSingleSeries' => true,
                    'position' => 'top',
                    'horizontalAlign' => 'left',
                    'customLegendItems' => [
                        'Female',
                        'Male'
                    ]
                ],
                'fill | gradient' => [
                    'gradientToColors' => [
                        '#36BDCB'
                    ],
                    'inverseColors' => false,
                    'stops' => [
                        0,
                        100
                    ]
                ],
                'grid' => [
                    'xaxis | lines | show' => true,
                    'yaxis | lines | show' => false,
                ]
            ],
            'colors' => [
                '#EC7D31',
                '#36BDCB'
            ],
            'fillType' => 'gradient',
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>