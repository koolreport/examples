<div class="report-content">
    <div class="text-center">
        <h1>ComboChart</h1>
        <p class="lead">
            This example shows how to create beautiful ComboChart
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
                'Date',
                'TEAM A',
                'TEAM B',
            ],
            [
                "Dec 01",
                44,
                55
            ],
            [
                "Dec 02",
                55,
                69
            ],
            [
                "Dec 03",
                31,
                45
            ],
            [
                "Dec 04",
                47,
                61
            ],
            [
                "Dec 05",
                31,
                43
            ],
            [
                "Dec 06",
                43,
                54
            ],
            [
                "Dec 07",
                26,
                37
            ],
            [
                "Dec 08",
                41,
                52
            ],
            [
                "Dec 09 ",
                31,
                44
            ],
            [
                "Dec 10",
                47,
                61
            ],
            [
                "Dec 11",
                33,
                43
            ]
        ];
        \koolreport\apexcharts\ComboChart::create(array(
            // "title" => "Traffic Sources",
            "dataSource" => $data,
            "columns" => array(
                "Date" => [
                    // "categoryType" => "datetime"
                ],
                "TEAM A" => [
                    "chartType" => "area"
                ],
                "TEAM B" => [
                    "chartType" => "line"
                ]
            ),
            "options" => [
                'yaxis | 0' =>[
                    'title | text' => 'Series A',
                ],
                'yaxis | 1' =>[
                    'opposite' => true,
                    'title | text' => 'Series B',
                ],
                'tooltip' => [
                    'shared' => true,
                    'intersect' => false,
                    'y | formatter' => 'function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;
                    }'
                ]
            ],
            "fillType" => "solid",
            "fillOpacity" => [
                0.35,
                1
            ],
            "markersSize" => 0,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>