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
                'month',
                'desktops'
            ],
            [
                "Jan",
                10
            ],
            [
                "Feb",
                41
            ],
            [
                "Mar",
                35
            ],
            [
                "Apr",
                51
            ],
            [
                "May",
                49
            ],
            [
                "Jun",
                62
            ],
            [
                "Jul",
                69
            ],
            [
                "Aug",
                91
            ],
            [
                "Sep",
                148
            ]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "desktops" => array(
                    "label" => "Desktops",
                    "type" => "number",
                    "prefix" => "$",
                ),
            ),
            "options" => [
                'grid | row' => [
                    'colors' => [
                        '#f3f3f3',
                        'transparent'
                    ],
                    'opacity' => 0.5
                ],
            ],
            "strokeCurve" => "straight",
            "strokeWidth" => 3,
            'markersSize' => 1,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>