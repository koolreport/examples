<div class="report-content">
    <div class="text-center">
        <h1>BarChart</h1>
        <p class="lead">
            This example shows how to create beautiful BarChart
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
                'Age Group',
                'Males',
                'Females',
            ],
            [
                "85+",
                0.4,
                -0.8
            ],
            [
                "80-84",
                0.65,
                -1.05
            ],
            [
                "75-79",
                0.76,
                -1.06
            ],
            [
                "70-74",
                0.88,
                -1.18
            ],
            [
                "65-69",
                1.5,
                -1.4
            ],
            [
                "60-64",
                2.1,
                -2.2
            ],
            [
                "55-59",
                2.9,
                -2.85
            ],
            [
                "50-54",
                3.8,
                -3.7
            ],
            [
                "45-49",
                3.9,
                -3.96
            ],
            [
                "40-44",
                4.2,
                -4.22
            ],
            [
                "35-39",
                4,
                -4.3
            ],
            [
                "30-34",
                4.3,
                -4.4
            ],
            [
                "25-29",
                4.1,
                -4.1
            ],
            [
                "20-24",
                4.2,
                -4
            ],
            [
                "15-19",
                4.5,
                -4.1
            ],
            [
                "10-14",
                3.9,
                -3.4
            ],
            [
                "5-9",
                3.5,
                -3.1
            ],
            [
                "0-4",
                3,
                -2.8
            ]
        ];
        \koolreport\apexcharts\BarChart::create(array(
            "title" => "Mauritius population pyramid 2011",
            "dataSource" => $data,
            "columns" => array(
                'Age Group',
                'Males',
                'Females',
            ),
            "options" => [
                'plotOptions | bar' => [
                    'borderRadius' => 5,
                    'borderRadiusApplication' => 'end',
                    'borderRadiusWhenStacked' => 'all',
                    'barHeight' => '80%'
                ],
                'stroke | colors' => [
                    '#fff'
                ],
                'grid | xaxis | lines | show' => true,
                'yaxis' => [
                    'min' => -5,
                    'max' => 5,
                ],
                'tooltip' => [
                    'shared' => false,
                    'y | formatter' => 'function (val) {
                        return Math.abs(val) + "%";
                    }',
                ],
                'xaxis | labels | formatter' => 'function (val) {
                    return Math.abs(Math.round(val)) + "%"
                }',
            ],
            "stacked" => true,
            'colors' => [
                '#008FFB',
                '#FF4560'
            ],
            "strokeWidth" => 1,
            "xTitle" => "Percent",
            "yTitle" => "Age Group",
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>