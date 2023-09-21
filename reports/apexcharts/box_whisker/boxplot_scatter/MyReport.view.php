<div class="report-content">
    <div class="text-center">
        <h1>BoxPlotChart</h1>
        <p class="lead">
            This example shows how to create beautiful BoxPlotChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data_boxplot = [
            [
                'datetime',
                'min',
                'per25',
                'median',
                'per75',
                'max',
            ],
            [
                "2017/1/1",
                54,
                66,
                69,
                75,
                88
            ],
            [
                "2018/1/1",
                43,
                65,
                69,
                76,
                81
            ],
            [
                "2019/1/1",
                31,
                39,
                45,
                51,
                59
            ],
            [
                "2020/1/1",
                39,
                46,
                55,
                65,
                71
            ],
            [
                "2021/1/1",
                29,
                31,
                35,
                39,
                44
            ]
        ];
        $data_scatter = [
            [
                "scatter_x",
                "scatter_y",
            ],
            [
                "2017/1/1",
                32
            ],
            [
                "2018/1/1",
                25
            ],
            [
                "2019/1/1",
                64
            ],
            [
                "2020/1/1",
                27
            ],
            [
                "2020/1/1",
                78
            ],
            [
                "2021/1/1",
                15
            ]
        ];
        $data = \koolreport\apexcharts\Chart::mergeDatasets($data_boxplot, $data_scatter);
        \koolreport\apexcharts\ComboChart::create(array(
            "title" => "BoxPlot - Scatter Chart",
            "dataSource" => $data,
            "columns" => array(
                "datetime" => [
                    "categoryType" => "datetime"
                ],
                'boxplot' => [
                    'combination' => [
                        'min',
                        'per25',
                        'median',
                        'per75',
                        'max',
                    ],
                    'chartType' => 'boxPlot',
                ],
                'outliers' =>  [
                    'combination' => [
                        'scatter_x',
                        'scatter_y',
                    ],
                    'chartType' => 'scatter',
                ],
            ),
            "options" => [
                'chart | type' => 'boxPlot',
                'xaxis | tooltip | formatter' => 'function(val) {
                    return new Date(val).getFullYear()
                }',
                'tooltip' => [
                    'shared' => false,
                    'intersect' => true
                ]
            ],
            'colors' => [
                '#008FFB',
                '#FEB019'
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