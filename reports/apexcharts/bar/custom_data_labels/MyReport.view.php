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
        $data = [
            [
                'country',
                'series-1'
            ],
            [
                "South Korea",
                400
            ],
            [
                "Canada",
                430
            ],
            [
                "United Kingdom",
                448
            ],
            [
                "Netherlands",
                470
            ],
            [
                "Italy",
                540
            ],
            [
                "France",
                580
            ],
            [
                "Japan",
                690
            ],
            [
                "United States",
                1100
            ],
            [
                "China",
                1200
            ],
            [
                "India",
                1380
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "country",
                "series-1",
            ),
            "options" => [
                'plotOptions | bar' => [
                    'barHeight' => '100%',
                    'distributed' => true,
                    'dataLabels | position' => 'bottom',
                ],
                'dataLabels' => [
                    'textAnchor' => 'start',
                    'offsetX' => 0,
                    'style | colors' => [
                        '#fff'
                    ],
                    'formatter' => 'function (val, opt) {
                        return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
                    }',
                    'dropShadow | enabled' => true,
                ],
                'stroke | colors' => [
                    '#fff'
                ],
                'yaxis | labels | show' => false,
                'title | floating' => true,
                'subtitle | align' => 'center',
                'tooltip' => [
                    'theme' => 'dark',
                    'x | show' => false,
                    'y | title | formatter' => "function () {
                        return '';
                    }",
                ]
            ],
            'colors' => [
                '#33b2df',
                '#546E7A',
                '#d4526e',
                '#13d8aa',
                '#A5978B',
                '#2b908f',
                '#f9a3a4',
                '#90ee7e',
                '#f48024',
                '#69d2e7'
            ],
            "title" => "Custom DataLabels",
            "subtitle" => "Category Names as DataLabels inside bars",
            "strokeWidth" => 1,
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>