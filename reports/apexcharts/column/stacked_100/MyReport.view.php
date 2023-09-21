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
                'date',
                'PRODUCT A',
                'PRODUCT B',
                'PRODUCT C',
                'PRODUCT D',
            ],
            [
                "01/01/2011 GMT",
                44,
                13,
                11,
                21
            ],
            [
                "01/02/2011 GMT",
                55,
                23,
                17,
                7
            ],
            [
                "01/03/2011 GMT",
                41,
                20,
                15,
                25
            ],
            [
                "01/04/2011 GMT",
                67,
                8,
                15,
                13
            ],
            [
                "01/05/2011 GMT",
                22,
                13,
                21,
                22
            ],
            [
                "01/06/2011 GMT",
                43,
                27,
                14,
                8
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                'PRODUCT A',
                'PRODUCT B',
                'PRODUCT C',
                'PRODUCT D',
            ),
            "options" => [
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options | legend' => [
                        'position' => 'bottom',
                        'offsetX' => -10,
                        'offsetY' => 0
                    ]
                ],
                'fill | opacity' => 1,
                'legend' => [
                    'position' => 'right',
                    'offsetX' => 0,
                    'offsetY' => 50
                ]
            ],
            "stacked" => true,
            "stackType" => "100%",
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>