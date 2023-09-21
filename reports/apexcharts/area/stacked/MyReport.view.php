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
                "South",
                "North",
                "Central"
            ],
            [
                "2/11/2017",
                10,
                15,
                12
            ],
            [
                "2/12/2017",
                36,
                19,
                11
            ],
            [
                "2/13/2017",
                47,
                18,
                12
            ],
            [
                "2/14/2017",
                23,
                10,
                13
            ],
            [
                "2/15/2017",
                29,
                15,
                12
            ],
            [
                "2/16/2017",
                20,
                11,
                10
            ],
            [
                "2/17/2017",
                59,
                19,
                13
            ],
            [
                "2/18/2017",
                36,
                15,
                10
            ],
            [
                "2/19/2017",
                37,
                15,
                12
            ],
            [
                "2/20/2017",
                23,
                14,
                11
            ],
            [
                "2/21/2017",
                15,
                12,
                11
            ],
            [
                "2/22/2017",
                51,
                10,
                10
            ],
            [
                "2/23/2017",
                55,
                10,
                15
            ],
            [
                "2/24/2017",
                33,
                20,
                13
            ],
            [
                "2/25/2017",
                22,
                20,
                10
            ],
            [
                "2/26/2017",
                22,
                18,
                15
            ],
            [
                "2/27/2017",
                19,
                16,
                12
            ],
            [
                "2/28/2017",
                26,
                18,
                14
            ],
            [
                "3/1/2017",
                15,
                16,
                11
            ],
            [
                "3/2/2017",
                51,
                13,
                13
            ]
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "South", "North", "Central"
            ),
            "options" => [
                'fill | gradient' => [
                    'opacityFrom' => 0.6,
                    'opacityTo' => 0.8
                ],
                'legend' => [
                    'position' => 'top',
                    'horizontalAlign' => 'left'
                ],
            ],
            'colors' => [
                '#008FFB',
                '#00E396',
                '#CED4DC'
            ],
            "stacked" => true,
            'fillType' => 'gradient',
            // "showLegend" => false,
            // "showLabel" => true,
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>