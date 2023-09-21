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
            ['data'],
            [34],
            [44],
            [54],
            [21],
            [12],
            [43],
            [33],
            [23],
            [66],
            [66],
            [58]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Step Line Chart",
            "dataSource" => $data,
            "columns" => array(
                "data" => []
            ),
            "options" => [
                "markers | hover | sizeOffset" => 4,
            ],
            "strokeCurve" => "stepline",
            // "showLabel" => true,
            "showLegend" => false,
            // "height" => "600px",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>