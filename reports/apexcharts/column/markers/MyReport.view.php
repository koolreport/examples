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
                'Actual',
                'Expected',
            ],
            [
                "2011",
                1292,
                1400
            ],
            [
                "2012",
                4432,
                5400
            ],
            [
                "2013",
                5423,
                5200
            ],
            [
                "2014",
                6653,
                6500
            ],
            [
                "2015",
                8133,
                6600
            ],
            [
                "2016",
                7132,
                7500
            ],
            [
                "2017",
                7332,
                8700
            ],
            [
                "2018",
                6553,
                7300
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'year',
                'Actual',
                'Expected' => [
                    'marker' => [
                        'strokeHeight' => 5,
                        'strokeColor' => '#775DD0'
                    ]
                ],
            ),
            "options" => [
                'plotOptions | bar | columnWidth' => '60%',
                'legend' => [
                    'showForSingleSeries' => true,
                    'customLegendItems' => [
                        'Actual',
                        'Expected'
                    ],
                    'markers | fillColors' => [
                        '#00E396',
                        '#775DD0'
                    ]
                ]
            ],
            'colors' => [
                '#00E396'
            ],
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>