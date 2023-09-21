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
        $market_cap = [
            [
                "date",
                "marketCap"
            ],
            [
                "13 Nov 2017",
                8107.85
            ],
            [
                "14 Nov 2017",
                8128
            ],
            [
                "15 Nov 2017",
                8122.9
            ],
            [
                "16 Nov 2017",
                8165.5
            ],
            [
                "17 Nov 2017",
                8340.7
            ],
            [
                "20 Nov 2017",
                8423.7
            ],
            [
                "21 Nov 2017",
                8423.5
            ],
            [
                "22 Nov 2017",
                8514.3
            ],
            [
                "23 Nov 2017",
                8481.85
            ],
            [
                "24 Nov 2017",
                8487.7
            ],
            [
                "27 Nov 2017",
                8506.9
            ],
            [
                "28 Nov 2017",
                8626.2
            ],
            [
                "29 Nov 2017",
                8668.95
            ],
            [
                "30 Nov 2017",
                8602.3
            ],
            [
                "01 Dec 2017",
                8607.55
            ],
            [
                "04 Dec 2017",
                8512.9
            ],
            [
                "05 Dec 2017",
                8496.25
            ],
            [
                "06 Dec 2017",
                8600.65
            ],
            [
                "07 Dec 2017",
                8881.1
            ],
            [
                "08 Dec 2017",
                9340.85
            ]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Line with Annotations",
            "dataSource" => $market_cap,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "marketCap" => array(
                    "label" => "Market Cap",
                    "type" => "number",
                    "decimals" => 2,
                    "suffix" => " M"
                ),
            ),
            "options" => [
                'annotations' => [
                    'yaxis' => [
                        [
                            'y' => 8200,
                            'borderColor' => '#00E396',
                            'label' => [
                                'borderColor' => '#00E396',
                                'style' => [
                                    'color' => '#fff',
                                    'background' => '#00E396'
                                ],
                                'text' => 'Support'
                            ]
                        ],
                        [
                            'y' => 8600,
                            'y2' => 9000,
                            'borderColor' => '#000',
                            'fillColor' => '#FEB019',
                            'opacity' => 0.2,
                            'label' => [
                                'borderColor' => '#333',
                                'style' => [
                                    'fontSize' => '10px',
                                    'color' => '#333',
                                    'background' => '#FEB019'
                                ],
                                'text' => 'Y-axis range'
                            ]
                        ]
                    ],
                    'xaxis' => [
                        [
                            'x' => 1511370000000,
                            'strokeDashArray' => 0,
                            'borderColor' => '#775DD0',
                            'label' => [
                                'borderColor' => '#775DD0',
                                'style' => [
                                    'color' => '#fff',
                                    'background' => '#775DD0'
                                ],
                                'text' => 'Anno Test'
                            ]
                        ],
                        [
                            'x' => 1511629200000,
                            'x2' => 1511802000000,
                            'fillColor' => '#B3F7CA',
                            'opacity' => 0.4,
                            'label' => [
                                'borderColor' => '#B3F7CA',
                                'style' => [
                                    'fontSize' => '10px',
                                    'color' => '#fff',
                                    'background' => '#00E396'
                                ],
                                'offsetY' => -10,
                                'text' => 'X-axis range'
                            ]
                        ]
                    ],
                    'points' => [
                        [
                            'x' => 1512061200000,
                            'y' => 8607.55,
                            'marker' => [
                                'size' => 8,
                                'fillColor' => '#fff',
                                'strokeColor' => 'red',
                                'radius' => 2,
                                'cssClass' => 'apexcharts-custom-class'
                            ],
                            'label' => [
                                'borderColor' => '#FF4560',
                                'offsetY' => 0,
                                'style' => [
                                    'color' => '#fff',
                                    'background' => '#FF4560'
                                ],
                                'text' => 'Point Annotation'
                            ]
                        ],
                        [
                            'x' => 1512666000000,
                            'y' => 9340.85,
                            'marker' => [
                                'size' => 0
                            ],
                            'image' => [
                                'path' => '../../../../assets/images/ico-instagram.png'
                            ]
                        ]
                    ]
                ],
                'grid | padding' => [
                        'right' => 30,
                        'left' => 20
                ],
                "xaxis | labels | format" => "'yy-MMM-dd",
                "yaxis | labels | formatter" => "function(value, index) {
                    return value.toLocaleString('en-US') + ' M';
                }",
            ],
            "strokeCurve" => "straight",
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>