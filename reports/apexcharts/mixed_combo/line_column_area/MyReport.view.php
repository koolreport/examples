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
                'TEAM C',
            ],
            [
                "01/01/2003",
                23,
                44,
                30
            ],
            [
                "02/01/2003",
                11,
                55,
                25
            ],
            [
                "03/01/2003",
                22,
                41,
                36
            ],
            [
                "04/01/2003",
                27,
                67,
                30
            ],
            [
                "05/01/2003",
                13,
                22,
                45
            ],
            [
                "06/01/2003",
                22,
                43,
                35
            ],
            [
                "07/01/2003",
                37,
                21,
                64
            ],
            [
                "08/01/2003",
                21,
                41,
                52
            ],
            [
                "09/01/2003",
                44,
                56,
                59
            ],
            [
                "10/01/2003",
                22,
                27,
                36
            ],
            [
                "11/01/2003",
                30,
                43,
                39
            ]
        ];
        \koolreport\apexcharts\ComboChart::create(array(
            // "title" => "Traffic Sources",
            "dataSource" => $data,
            "columns" => array(
                "Date" => [
                    "categoryType" => "datetime"
                ],
                "TEAM A" => [
                    "chartType" => "column",
                ],
                "TEAM B" => [
                    "chartType" => "area",
                ],
                "TEAM C" => [
                    "chartType" => "line",
                ],
            ),
            "options" => [
                'plotOptions | bar | columnWidth' => '50%',
                'fill | gradient' => [
                    'inverseColors' => false,
                    'shade' => 'light',
                    'type' => 'vertical',
                    'opacityFrom' => 0.85,
                    'opacityTo' => 0.55,
                    'stops' => [
                        0,
                        100,
                        100,
                        100
                    ]
                ],
                'yaxis | min' => 0,
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
            "yTitle" => "Points",
            'strokeWidth' => [
                0,
                2,
                5
            ],
            'strokeCurve' => 'smooth',
            'fillOpacity' => [
                0.85,
                0.25,
                1
            ],
            'markersSize' => 0,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>