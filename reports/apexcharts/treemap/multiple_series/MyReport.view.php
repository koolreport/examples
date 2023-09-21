<div class="report-content">
    <div class="text-center">
        <h1>TreeMapChart</h1>
        <p class="lead">
            This example shows how to create beautiful TreeMapChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data_desktop = [
            [
                'category',
                'desktop',
            ],
            [
                "ABC",
                10
            ],
            [
                "DEF",
                60
            ],
            [
                "XYZ",
                41
            ]
        ];
        $data_mobile = [
            [
                'category',
                'mobile',
            ],
            [
                "ABCD",
                10
            ],
            [
                "DEFG",
                20
            ],
            [
                "WXYZ",
                51
            ],
            [
                "PQR",
                30
            ],
            [
                "MNO",
                20
            ],
            [
                "CDE",
                30
            ]
        ];
        $data = \koolreport\apexcharts\Chart::mergeDatasets($data_desktop, $data_mobile);
        \koolreport\apexcharts\TreeMapChart::create(array(
            "title" => "Multi-series TreeMapChart",
            "dataSource" => $data,
            "columns" => array(
                'category',
                'desktop',
                'mobile',
            ),
            "options" => [],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>