<div class="report-content">
    <div class="text-center">
        <h1>PieChart</h1>
        <p class="lead">
            This example shows how to create beautiful PieChart
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
                'value'
            ],
            [
                44
            ],
            [
                55
            ],
            [
                41
            ],
            [
                17
            ],
            [
                15
            ]
        ];
        \koolreport\apexcharts\DonutChart::create(array(
            // "title" => "Pie Chart",
            "dataSource" => $data,
            "columns" => array(
                "value"
            ),
            "options" => [],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>