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
                'year',
                'series-1',
                'series-2',
                'series-3',
            ],
            [
                "2011",
                80,
                20,
                44
            ],
            [
                "2012",
                50,
                30,
                76
            ],
            [
                "2013",
                30,
                40,
                78
            ],
            [
                "2014",
                40,
                80,
                13
            ],
            [
                "2015",
                100,
                20,
                43
            ],
            [
                "2016",
                20,
                80,
                10
            ]
        ];
        \koolreport\apexcharts\RadarChart::create(array(
            "title" => "Radar Chart - Multi Series",
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "series-1",
                "series-2",
                "series-3",
            ),
            "options" => [
                'chart | dropShadow' => [
                    'enabled' => true,
                    'blur' => 1,
                    'left' => 1,
                    'top' => 1
                ],

            ],
            'strokeWidth' => 2,
            'fillOpacity' => 0.1,
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