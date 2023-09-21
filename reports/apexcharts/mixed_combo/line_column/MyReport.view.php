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
                'Website Blog',
                'Social Media',
            ],
            [
                "01 Jan 2001",
                440,
                23
            ],
            [
                "02 Jan 2001",
                505,
                42
            ],
            [
                "03 Jan 2001",
                414,
                35
            ],
            [
                "04 Jan 2001",
                671,
                27
            ],
            [
                "05 Jan 2001",
                227,
                43
            ],
            [
                "06 Jan 2001",
                413,
                22
            ],
            [
                "07 Jan 2001",
                201,
                17
            ],
            [
                "08 Jan 2001",
                352,
                31
            ],
            [
                "09 Jan 2001",
                752,
                22
            ],
            [
                "10 Jan 2001",
                320,
                22
            ],
            [
                "11 Jan 2001",
                257,
                12
            ],
            [
                "12 Jan 2001",
                160,
                16
            ]
        ];
        \koolreport\apexcharts\ComboChart::create(array(
            "title" => "Traffic Sources",
            "dataSource" => $data,
            "columns" => array(
                "Date" => [
                    "categoryType" => "datetime"
                ],
                "Website Blog" => [
                    "chartType" => "column"
                ],
                "Social Media" => [
                    "chartType" => "line"
                ]
            ),
            "options" => [
                'dataLabels | enabledOnSeries' => [1],
                'yaxis | 0 | title | text' => 'Website Blog',
                'yaxis | 1' => [
                    'opposite' => true,
                    'title | text' => 'Social Media',
                ],
                "legend | position" => "top",
            ],
            "strokeWidth" => [
                0,
                4
            ],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>