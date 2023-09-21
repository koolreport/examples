<div class="report-content">
    <div class="text-center">
        <h1>LineChart</h1>
        <p class="lead">
            This example shows how to create beautiful LineChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data_bob = [
            [
                'phase',
                'bob_start',
                'bob_end',
            ],
            [
                "Design",
                "2019-3-5",
                "2019-3-8"
            ],
            [
                "Code",
                "2019-3-2",
                "2019-3-5"
            ],
            [
                "Code",
                "2019-3-5",
                "2019-3-7"
            ],
            [
                "Test",
                "2019-3-3",
                "2019-3-9"
            ],
            [
                "Test",
                "2019-3-8",
                "2019-3-11"
            ],
            [
                "Validation",
                "2019-3-11",
                "2019-3-16"
            ],
            [
                "Design",
                "2019-3-1",
                "2019-3-3"
            ]
        ];
        $data_joe = [
            [
                'phase',
                'joe_start',
                'joe_end',
            ],
            [
                "Design",
                "2019-3-2",
                "2019-3-5"
            ],
            [
                "Test",
                "2019-3-6",
                "2019-3-16"
            ],
            [
                "Code",
                "2019-3-3",
                "2019-3-7"
            ],
            [
                "Deployment",
                "2019-3-20",
                "2019-3-22"
            ],
            [
                "Design",
                "2019-3-10",
                "2019-3-16"
            ]
        ];
        $data_dan = [
            [
                'phase',
                'dan_start',
                'dan_end',
            ],
            [
                "Code",
                "2019-3-10",
                "2019-3-17"
            ],
            [
                "Validation",
                "2019-3-5",
                "2019-3-9"
            ]
        ];
        $data_joe_marker = [
            [
                "phase",
                "joe_marker_date",
            ],
            [
                "Test",
                "2019-03-10"
            ],
        ];
        $data_dan_marker = [
            [
                "phase",
                "dan_marker_date",
            ],
            [
                "Validation",
                "2019-03-07"
            ]
        ];
        $data = \koolreport\apexcharts\Chart::mergeDatasets(
            $data_bob,
            $data_joe,
            $data_joe_marker,
            $data_dan,
            $data_dan_marker
        );
        // \koolreport\core\Utility::prettyPrint($data);
        \koolreport\apexcharts\TimeLineChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "phase" => [
                    "label" => "Phase",
                ],
                "Bob" => [
                    "combination" => [
                        "bob_start",
                        "bob_end",
                    ]
                ],
                "Joe" => [
                    "combination" => [
                        "joe_start",
                        "joe_end",
                    ]
                ],
                "joe_marker_date" => [
                    "marker" => [
                        // 'strokeHeight' => 5,
                        'strokeColor' => '#CD2F2A',
                    ]
                ],
                "Dan" => [
                    "combination" => [
                        "dan_start",
                        "dan_end",
                    ]
                ],
                "dan_marker_date" => [
                    "marker" => [
                        // 'strokeHeight' => 5,
                        'strokeColor' => '#CD2F2A',
                    ]
                ],
            ),
            "options" => [
                'plotOptions | bar | barHeight' => '80%',
                'legend' => [
                    'position' => 'top',
                    'horizontalAlign' => 'left'
                ],
                'xaxis | type' => 'datetime',
            ],
            "strokeWidth" => 1,
            "fillType" => "solid",
            "fillOpacity" => 0.6,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>