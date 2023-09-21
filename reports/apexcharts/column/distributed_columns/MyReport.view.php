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

        .apexcharts-xaxis-label {
            font-weight: bold;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'person',
                'series-1'
            ],
            [
                [
                    "John",
                    "Doe"
                ],
                21
            ],
            [
                [
                    "Joe",
                    "Smith"
                ],
                22
            ],
            [
                [
                    "Jake",
                    "Williams"
                ],
                10
            ],
            [
                "Amber",
                28
            ],
            [
                [
                    "Peter",
                    "Brown"
                ],
                16
            ],
            [
                [
                    "Mary",
                    "Evans"
                ],
                21
            ],
            [
                [
                    "David",
                    "Wilson"
                ],
                13
            ],
            [
                [
                    "Lily",
                    "Roberts"
                ],
                30
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "person",
                "series-1"
            ),
            "options" => [
                'plotOptions | bar' => [
                    'columnWidth' => '45%',
                    'distributed' => true
                ],
                'xaxis | labels | style' => [
                    'colors' => [
                        '#008FFB',
                        '#00E396',
                        '#FEB019',
                        '#FF4560',
                        '#775DD0',
                        '#546E7A',
                        '#26a69a',
                        '#D10CE8'
                    ],
                    'fontSize' => '12px'
                ]
            ],
            'colors' => [
                '#008FFB',
                '#00E396',
                '#FEB019',
                '#FF4560',
                '#775DD0',
                '#546E7A',
                '#26a69a',
                '#D10CE8'
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