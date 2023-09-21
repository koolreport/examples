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
    <div style="margin-bottom:50px; margin: 0 auto">
        <?php
        $data = [
            [
                'month',
                'Inflation'
            ],
            [
                "Jan",
                2.3
            ],
            [
                "Feb",
                3.1
            ],
            [
                "Mar",
                4
            ],
            [
                "Apr",
                10.1
            ],
            [
                "May",
                4
            ],
            [
                "Jun",
                3.6
            ],
            [
                "Jul",
                3.2
            ],
            [
                "Aug",
                2.3
            ],
            [
                "Sep",
                1.4
            ],
            [
                "Oct",
                0.8
            ],
            [
                "Nov",
                0.5
            ],
            [
                "Dec",
                0.2
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "title" => "Monthly Inflation in Argentina, 2002",
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "Inflation",
            ),
            "options" => [
                'plotOptions | bar' => [
                    'borderRadius' => 10,
                    'dataLabels | position' => 'top',
                ],
                'dataLabels' => [
                    'formatter' => 'function (val) {
                        return val + "%";
                    }',
                    'offsetY' => -20,
                    'style' => [
                        'fontSize' => '12px',
                        'colors' => [
                            '#304758'
                        ]
                    ]
                ],
                'xaxis' => [
                    'position' => 'top',
                    'axisBorder | show' => false,
                    'axisTicks | show' => false,
                    'crosshairs | fill' => [
                        'type' => 'gradient',
                        'gradient' => [
                            'colorFrom' => '#D8E3F0',
                            'colorTo' => '#BED1E6',
                            'stops' => [
                                0,
                                100
                            ],
                            'opacityFrom' => 0.4,
                            'opacityTo' => 0.5
                        ]
                    ],
                ],
                'yaxis' => [
                    'axisBorder | show' => false,
                    'axisTicks | show' => false,
                    'labels' => [
                        'show' => false,
                        'formatter' => 'function (val) {
                            return val + "%";
                        }'
                    ]
                ],
                'title' => [
                    'floating' => true,
                    'offsetY' => 330,
                    'style | color' => '#444',
                ]
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "showTooltip" => false,
            "height" => "350px",
            "maxWidth" => "650px",
            "cssStyles" => [
                "margin" => "0 auto",
            ]
        ));
        ?>
    </div>

</div>