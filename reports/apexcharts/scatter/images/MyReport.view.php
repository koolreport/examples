<div class="report-content">
    <div class="text-center">
        <h1>ScatterChart</h1>
        <p class="lead">
            This example shows how to create beautiful ScatterChart
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
                'Messenger_x',
                'Messenger_y',
                'Instagram_x',
                'Instagram_y',
            ],
            [
                16.4,
                5.4,
                6.4,
                5.4
            ],
            [
                21.7,
                4,
                11.7,
                4
            ],
            [
                25.4,
                3,
                15.4,
                3
            ],
            [
                19,
                2,
                9,
                2
            ],
            [
                10.9,
                1,
                10.9,
                11
            ],
            [
                13.6,
                3.2,
                20.9,
                7
            ],
            [
                10.9,
                7,
                12.9,
                8.2
            ],
            [
                10.9,
                8.2,
                6.4,
                14
            ],
            [
                16.4,
                4,
                11.6,
                12
            ],
            [
                13.6,
                4.3,
                null,
                null
            ],
            [
                13.6,
                12,
                null,
                null
            ],
            [
                29.9,
                3,
                null,
                null
            ],
            [
                10.9,
                5.2,
                null,
                null
            ],
            [
                16.4,
                6.5,
                null,
                null
            ],
            [
                10.9,
                8,
                null,
                null
            ],
            [
                24.5,
                7.1,
                null,
                null
            ],
            [
                10.9,
                7,
                null,
                null
            ],
            [
                8.1,
                4.7,
                null,
                null
            ],
            [
                19,
                10,
                null,
                null
            ],
            [
                27.1,
                10,
                null,
                null
            ],
            [
                24.5,
                8,
                null,
                null
            ],
            [
                27.1,
                3,
                null,
                null
            ],
            [
                29.9,
                11.5,
                null,
                null
            ],
            [
                27.1,
                0.8,
                null,
                null
            ],
            [
                22.1,
                2,
                null,
                null
            ]
        ];
        \koolreport\apexcharts\ScatterChart::create(array(
            // "title" => "Traffic Sources",
            "dataSource" => $data,
            "columns" => array(
                'Messenger' => [
                    'combination' => [
                        'Messenger_x',
                        'Messenger_y',
                    ]
                ],
                'Instagram' => [
                    'combination' => [
                        'Instagram_x',
                        'Instagram_y',
                    ]
                ],
            ),
            "options" => [
                'chart' => [
                    'animations | enabled ' => false,
                    'zoom | enabled' => false,
                    'toolbar | show' => false,
                ],
                'xaxis' => [
                    'tickAmount' => 10,
                    'min' => 0,
                    'max' => 40
                ],
                'yaxis | tickAmount' => 7,
                'fill | image' => [
                    'src' => [
                        '../images/images/ico-messenger.png',
                        '../images/images/ico-instagram.png'
                    ],
                    'width' => 40,
                    'height' => 40
                ],
                'legend' => [
                    'labels | useSeriesColors' => true,
                    'markers | customHTML' => [
                        'function() {
                            return \'<span><i class="fab fa-facebook"></i></span>\'
                        }',
                        'function() {
                            return \'<span><i class="fab fa-instagram"></i></span>\'
                        }'
                    ]
                ]
            ],
            'colors' => [
                '#056BF6',
                '#D2376A'
            ],
            'fillType' => 'image',
            'fillOpacity' => 1,
            'markersSize' => 20,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>