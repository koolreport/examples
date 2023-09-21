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
                "Category A",
                54,
                66,
                69,
                75,
                88
            ],
            [
                "Category B",
                43,
                65,
                69,
                76,
                81
            ],
            [
                "Category C",
                31,
                39,
                45,
                51,
                59
            ],
            [
                "Category D",
                39,
                46,
                55,
                65,
                71
            ],
            [
                "Category E",
                29,
                31,
                35,
                39,
                44
            ],
            [
                "Category F",
                41,
                49,
                58,
                61,
                67
            ],
            [
                "Category G",
                54,
                59,
                66,
                71,
                88
            ]
        ];
        \koolreport\apexcharts\BoxPlotChart::create(array(
            "title" => "Horizontal BoxPlot Chart",
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
                'plotOptions' => [
                    'bar' => [
                        'horizontal' => true,
                        'barHeight' => '50%'
                    ],
                    'boxPlot | colors' => [
                        'upper' => '#e9ecef',
                        'lower' => '#f8f9fa'
                    ]
                ],
                'stroke | colors' => [
                    '#6c757d'
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