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
        $data = [
            [
                'month',
                'min',
                'per25',
                'median',
                'per75',
                'max',
            ],
            [
                "Jan 2015",
                54,
                66,
                69,
                75,
                88
            ],
            [
                "Jan 2016",
                43,
                65,
                69,
                76,
                81
            ],
            [
                "Jan 2017",
                31,
                39,
                45,
                51,
                59
            ],
            [
                "Jan 2018",
                39,
                46,
                55,
                65,
                71
            ],
            [
                "Jan 2019",
                29,
                31,
                35,
                39,
                44
            ],
            [
                "Jan 2020",
                41,
                49,
                58,
                61,
                67
            ],
            [
                "Jan 2021",
                54,
                59,
                66,
                71,
                88
            ]
        ];
        \koolreport\apexcharts\BoxPlotChart::create(array(
            "title" => "Basic BoxPlot Chart",
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                'boxplot' => [
                    'combination' => [
                        'min',
                        'per25',
                        'median',
                        'per75',
                        'max',
                    ]
                ]
            ),
            "options" => [
                'plotOptions | boxPlot | colors' => [
                    'upper' => '#5C4742',
                    'lower' => '#A5978B'
                ]
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