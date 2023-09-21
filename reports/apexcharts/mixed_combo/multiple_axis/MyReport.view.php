<div class="report-content">
    <div class="text-center">
        <h1>ComboChart</h1>
        <p class="lead">
            This example shows how to create beautiful ComboChart
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
                'Year',
                'Income',
                'Cashflow',
                'Revenue',
            ],
            [
                "2009",
                1.4,
                1.1,
                20
            ],
            [
                "2010",
                2,
                3,
                29
            ],
            [
                "2011",
                2.5,
                3.1,
                37
            ],
            [
                "2012",
                1.5,
                4,
                36
            ],
            [
                "2013",
                2.5,
                4.1,
                44
            ],
            [
                "2014",
                2.8,
                4.9,
                45
            ],
            [
                "2015",
                3.8,
                6.5,
                50
            ],
            [
                "2016",
                4.6,
                8.5,
                58
            ]
        ];
        \koolreport\apexcharts\ComboChart::create(array(
            "title" => "XYZ - Stock Analysis (2009 - 2016)",
            "dataSource" => $data,
            "columns" => array(
                "Year" => [
                    // "categoryType" => "category"
                ],
                "Income" => [
                    "chartType" => "column"
                ],
                "Cashflow" => [
                    "chartType" => "column"
                ],
                "Revenue" => [
                    "chartType" => "line"
                ],
            ),
            "options" => [
                'chart | type' => 'line',
                'title' => [
                    'align' => 'left',
                    'offsetX' => 110
                ],
                'yaxis | 0' => [
                    'axisTicks | show' => true,
                    'axisBorder' => [
                        'show' => true,
                        'color' => '#008FFB'
                    ],
                    'labels | style | colors' => '#008FFB',
                    'title' => [
                        'text' => 'Income (thousand crores)',
                        'style | color' => '#008FFB',
                    ],
                    'tooltip | enabled' => true,
                ],
                'yaxis | 1' => [
                    'seriesName' => 'Income',
                    'opposite' => true,
                    'axisTicks | show' => true,
                    'axisBorder' => [
                        'show' => true,
                        'color' => '#00E396'
                    ],
                    'labels | style | colors' => '#00E396',
                    'title' => [
                        'text' => 'Operating Cashflow (thousand crores)',
                        'style | color' => '#00E396',
                    ]
                ],
                'yaxis | 2' => [
                    'seriesName' => 'Revenue',
                    // "show" => false,
                    'opposite' => true,
                    'axisTicks | show' => true,
                    'axisBorder' => [
                        'show' => true,
                        'color' => '#FEB019'
                    ],
                    'labels | style |  colors' => '#FEB019',
                    'title' => [
                        'text' => 'Revenue (thousand crores)',
                        'style | color' => '#FEB019',
                    ]
                ],
                'tooltip |  fixed' => [
                    'enabled' => true,
                    'position' => 'topLeft',
                    'offsetY' => 30,
                    'offsetX' => 60
                ],
                'legend' => [
                    'horizontalAlign' => 'left',
                    'offsetX' => 40
                ]
            ],
            "strokeWidth" => [
                1,
                1,
                4
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