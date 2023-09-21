<div class="report-content">
    <div class="text-center">
        <h1>AreaChart</h1>
        <p class="lead">
            This example shows how to create beautiful AreaChart
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
                "date",
                "network"
            ],
            [
                'Dec 23 2017',
                null
            ],
            [
                'Dec 24 2017',
                44
            ],
            [
                'Dec 25 2017',
                31
            ],
            [
                'Dec 26 2017',
                38
            ],
            [
                'Dec 27 2017',
                null
            ],
            [
                'Dec 28 2017',
                32
            ],
            [
                'Dec 29 2017',
                55
            ],
            [
                'Dec 30 2017',
                51
            ],
            [
                'Dec 31 2017',
                67
            ],
            [
                'Jan 01 2018',
                22
            ],
            [
                'Jan 02 2018',
                34
            ],
            [
                'Jan 03 2018',
                null
            ],
            [
                'Jan 04 2018',
                null
            ],
            [
                'Jan 05 2018',
                11
            ],
            [
                'Jan 06 2018',
                4
            ],
            [
                'Jan 07 2018',
                15
            ],
            [
                'Jan 08 2018',
                null
            ],
            [
                'Jan 09 2018',
                9
            ],
            [
                'Jan 10 2018',
                34
            ],
            [
                'Jan 11 2018',
                null
            ],
            [
                'Jan 12 2018',
                null
            ],
            [
                'Jan 13 2018',
                13
            ],
            [
                'Jan 14 2018',
                null
            ]
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "title" => "Network Monitoring",
            "dataSource" => $data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "network" => array(
                    "label" => "Network",
                    "type" => "number",
                    "decimals" => 2,
                    // "suffix" => ""
                ),
            ),
            "options" => [
                'chart | animations | enabled' => false,
                'fill | pattern' => [
                    'style' => [
                        'verticalLines',
                        'horizontalLines'
                    ],
                    'width' => 5,
                    'height' => 6
                ],
                'markers | hover | size' => 9,
                'tooltip' => [
                    'intersect' => true,
                    'shared' => false
                ],
                'theme | palette' => 'palette1',
            ],
            'yTitle' => 'Bytes Received',
            "strokeCurve" => "straight",
            'fillType' => 'pattern',
            "markersSize" => 5,
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>