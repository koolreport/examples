<div class="report-content">
    <div class="text-center">
        <h1>LineChart</h1>
        <p class="lead">
            This example shows how to create beautiful LineChart
        </p>
    </div>
    <style>
        .apexcharts_wrapper>div,
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                "date",
                "sales1",
                "sales2",
                "sales3"
            ],
            [
                "2017-02-11",
                10,
                21,
                29
            ],
            [
                "2017-02-12",
                36,
                27,
                23
            ],
            [
                "2017-02-13",
                47,
                25,
                27
            ],
            [
                "2017-02-14",
                23,
                11,
                42
            ],
            [
                "2017-02-15",
                29,
                21,
                28
            ],
            [
                "2017-02-16",
                20,
                12,
                12
            ],
            [
                "2017-02-17",
                59,
                28,
                36
            ],
            [
                "2017-02-18",
                36,
                19,
                18
            ],
            [
                "2017-02-19",
                37,
                19,
                33
            ],
            [
                "2017-02-20",
                23,
                19,
                26
            ],
            [
                "2017-02-21",
                15,
                14,
                19
            ],
            [
                "2017-02-22",
                51,
                10,
                13
            ],
            [
                "2017-02-23",
                55,
                10,
                60
            ],
            [
                "2017-02-24",
                33,
                30,
                37
            ],
            [
                "2017-02-25",
                22,
                29,
                14
            ],
            [
                "2017-02-26",
                22,
                26,
                60
            ],
            [
                "2017-02-27",
                19,
                21,
                32
            ],
            [
                "2017-02-28",
                26,
                26,
                45
            ],
            [
                "2017-03-01",
                15,
                23,
                19
            ],
            [
                "2017-03-02",
                51,
                17,
                37
            ]
        ];
        \koolreport\apexcharts\BrushCharts::create(array(
            // "title"=>"Sale vs Cost",
            // "type" => "bar",
            "dataSource" => $data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                    // "categoryType" => "category",
                ],
                "sales1" => array(
                    "label" => "Sales A",
                    "type" => "number",
                    "prefix" => "$",
                    "chartType" => "line", // default chart type = column
                    "chartColor" => "#546E7A",
                    "charts" => [1],
                ),
                "sales2" => array(
                    "label" => "Sales B",
                    "type" => "number",
                    "prefix" => "$",
                    "chartType" => "area", // default chart type = column
                    "chartColor" => "#008FFB",
                    "charts" => [1, 2],
                ),
                "sales3" => array(
                    "label" => "Sales C",
                    "type" => "number",
                    "prefix" => "$",
                    "chartType" => "line", // default chart type = column
                    "chartColor" => "#00E396",
                    "charts" => [2],
                ),
            ),
            "brushMap" => [
                1 => 2,
            ],
            "options" => [
                "yaxis" => [
                    "tickAmount" => 5,
                    "min" => 0,
                ]
            ],
            "widthHeightAutoRatio" => 3,
            "strokeWidth" => 3,
            "maxWidth" => 800,

            "settings_1" => [
                "options" => [],
            ],
            "settings_2" => [
                "options" => [],
                "widthHeightAutoRatio" => 2.5,
                "strokeWidth" => 1,
            ],
        ));
        ?>
    </div>

</div>