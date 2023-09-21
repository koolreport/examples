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
                'month',
                'series-1'
            ],
            [
                "January",
                80
            ],
            [
                "February",
                50
            ],
            [
                "March",
                30
            ],
            [
                "April",
                40
            ],
            [
                "May",
                100
            ],
            [
                "June",
                20
            ]
        ];
        \koolreport\apexcharts\RadarChart::create(array(
            "title" => "Basic Radar Chart",
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "series-1" => array(
                ),
            ),
            "options" => [
                // 'plotOptions | radar | size' => 180
            ],
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>