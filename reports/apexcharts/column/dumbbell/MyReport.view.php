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
                'year',
                'Product A',
                'Product B',
            ],
            [
                "2008",
                2800,
                4500
            ],
            [
                "2009",
                3200,
                4100
            ],
            [
                "2010",
                2950,
                7800
            ],
            [
                "2011",
                3000,
                4600
            ],
            [
                "2012",
                3500,
                4100
            ],
            [
                "2013",
                4500,
                6500
            ],
            [
                "2014",
                4100,
                5600
            ]
        ];
        \koolreport\apexcharts\RangeBarChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "year" => [
                    "label" => "Year"
                ],
                'Product Range' => [
                    'combination' => [
                        'Product A',
                        'Product B',
                    ]
                ]
            ),
            // "autoCategoryColumn" => true,
            "options" => [
                'plotOptions | bar' => [
                    'isDumbbell' => true,
                    'columnWidth' => 3,
                    'dumbbellColors' => [
                        [
                            '#008FFB',
                            '#00E396'
                        ]
                    ]
                ],
                'legend' => [
                    'showForSingleSeries' => true,
                    'position' => 'top',
                    'horizontalAlign' => 'left',
                    'customLegendItems' => [
                        'Product A',
                        'Product B'
                    ]
                ],
                'fill | type' => 'gradient',
                'fill | gradient' => [
                    'type' => 'vertical',
                    'gradientToColors' => [
                        '#00E396'
                    ],
                    'inverseColors' => true,
                    'stops' => [
                        0,
                        100
                    ]
                ],
                'grid' => [
                    'xaxis | lines | show' => true,
                    'yaxis | lines | show' => false,
                ],
                'xaxis | tickPlacement' => 'on',
            ],
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>