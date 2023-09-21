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
                'category',
                'Q1 Budget',
                'Q1 Actual',
                'Q2 Budget',
                'Q2 Actual'
            ],
            [
                "Online advertising",
                44000,
                48000,
                13000,
                20000
            ],
            [
                "Sales Training",
                55000,
                50000,
                36000,
                40000
            ],
            [
                "Print advertising",
                41000,
                40000,
                20000,
                25000
            ],
            [
                "Catalogs",
                67000,
                65000,
                8000,
                10000
            ],
            [
                "Meetings",
                22000,
                25000,
                13000,
                12000
            ],
            [
                "Public relations",
                43000,
                40000,
                27000,
                28000
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "category",
                'Q1 Budget' => [
                    "group" => 'budget',
                ],
                'Q1 Actual' => [
                    "group" => 'actual',
                ],
                'Q2 Budget' => [
                    "group" => 'budget',
                ],
                'Q2 Actual' => [
                    "group" => 'actual',
                ]
            ),
            "options" => [
                'stroke | colors' => [
                    '#fff'
                ],
                'dataLabels | formatter' => "(val) => {
                    return val / 1000 + 'K'
                }",
                'xaxis | labels | formatter' => "(val) => {
                    return val / 1000 + 'K'
                }",
                'legend' => [
                    'position' => 'top',
                    'horizontalAlign' => 'left'
                ]
            ],
            "stacked" => true,
            'colors' => [
                '#80c7fd',
                '#008FFB',
                '#80f1cb',
                '#00E396'
            ],
            "strokeWidth" => 1,
            "fillOpacity" => 1,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>