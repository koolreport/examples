<div class="report-content">
    <div class="text-center">
        <h1>FunnelChart</h1>
        <p class="lead">
            This example shows how to create beautiful FunnelChart
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
                'recruitment',
                'value'
            ],
            [
                "Sourced",
                1380
            ],
            [
                "Screened",
                1100
            ],
            [
                "Assessed",
                990
            ],
            [
                "HR Interview",
                880
            ],
            [
                "Technical",
                740
            ],
            [
                "Verify",
                548
            ],
            [
                "Offered",
                330
            ],
            [
                "Hired",
                200
            ]
        ];
        \koolreport\apexcharts\FunnelChart::create(array(
            "title" => "Recruitment Funnel",
            "dataSource" => $data,
            "columns" => array(
                "recruitment" => [
                    "label" => "Recruitment"
                ],
                "value" => array(),
            ),
            "options" => [
                'dataLabels' => [
                    'formatter' => "function (val, opt) {
                        return opt.w.globals.labels[opt.dataPointIndex] + ':  ' + val
                    }",
                    'dropShadow | enabled' => true,
                ],
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>