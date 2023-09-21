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
                'Actual',
                'Expected',
            ],
            [
                "2011",
                12,
                14
            ],
            [
                "2012",
                44,
                54
            ],
            [
                "2013",
                54,
                52
            ],
            [
                "2014",
                66,
                61
            ],
            [
                "2015",
                81,
                66
            ],
            [
                "2016",
                67,
                70
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                'year',
                'Actual',
                'Expected' => [
                    'marker' => [
                        'strokeWidth' => 5,
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