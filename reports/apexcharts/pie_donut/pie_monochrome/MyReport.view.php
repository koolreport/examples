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
                'weekday',
                'value'
            ],
            [
                "Monday",
                25
            ],
            [
                "Tuesday",
                15
            ],
            [
                "Wednesday",
                44
            ],
            [
                "Thursday",
                55
            ],
            [
                "Friday",
                41
            ],
            [
                "Saturday",
                17
            ]
        ];
        \koolreport\apexcharts\PieChart::create(array(
            "title" => "Monochrome Pie",
            "dataSource" => $data,
            "columns" => array(
                "weekday",
                "value"
            ),
            "options" => [
                'theme | monochrome | enabled' => true,
                'plotOptions | pie | dataLabels | offset' => -5,
                'dataLabels | formatter' => "function(val, opts) {
                    const name = opts.w.globals.labels[opts.seriesIndex]
                    return [name, val.toFixed(1) + ' % ']
                }",
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>