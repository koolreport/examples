<div class="report-content">
    <div class="text-center">
        <h1>RadarChart</h1>
        <p class="lead">
            This example shows how to create beautiful RadarChart
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
                'weekday',
                'series-1'
            ],
            [
                "Sunday",
                20
            ],
            [
                "Monday",
                100
            ],
            [
                "Tuesday",
                40
            ],
            [
                "Wednesday",
                30
            ],
            [
                "Thursday",
                50
            ],
            [
                "Friday",
                80
            ],
            [
                "Saturday",
                33
            ]
        ];
        \koolreport\apexcharts\RadarChart::create(array(
            "title" => "Radar with Polygon Fill",
            "dataSource" => $data,
            "columns" => array(
                "weekday" => [
                    "label" => "Weekday"
                ],
                "series-1" => array(),
            ),
            "options" => [
                'plotOptions | radar | polygons' => [
                    'strokeColors' => '#e9e9e9',
                    'fill | colors' => [
                        '#f8f8f8',
                        '#fff'
                    ]
                ],
                'markers' => [
                    'colors' => ['#fff'],
                    'strokeColor' => '#FF4560',
                    'strokeWidth' => 2
                ],
                'tooltip | y | formatter' => 'function(val) {
                    return val;
                }',
                'yaxis' => [
                    'tickAmount' => 7,
                    'labels | formatter' => "function(val, i) {
                        if (i % 2 === 0) {
                            return val
                        } else {
                            return ''
                        }
                    }",
                ],
            ],
            'colors' => [
                '#FF4560'
            ],
            'markersSize' => 4,
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>