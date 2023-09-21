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
                "series-1",
                "series-2"
            ],
            [
                "2018-09-19T00:00:00.000Z",
                31,
                11
            ],
            [
                "2018-09-19T01:30:00.000Z",
                40,
                32
            ],
            [
                "2018-09-19T02:30:00.000Z",
                28,
                45
            ],
            [
                "2018-09-19T03:30:00.000Z",
                51,
                32
            ],
            [
                "2018-09-19T04:30:00.000Z",
                42,
                34
            ],
            [
                "2018-09-19T05:30:00.000Z",
                109,
                52
            ],
            [
                "2018-09-19T06:30:00.000Z",
                100,
                41
            ]
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "series-1" => [], 
                "series-2" => []
            ),
            "options" => [
                "tooltip | x | format" => 'dd/MM/yy HH:mm',
            ],
            // "showLegend" => false,
            // "showLabel" => true,
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>