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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script> -->
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'phase',
                'timeline_start',
                'timeline_end',
            ],
            [
                "Analysis",
                "2019-02-27",
                "2019-03-04"
            ],
            [
                "Code",
                "2019-3-2",
                "2019-3-4"
            ],
            [
                "Test",
                "2019-3-4",
                "2019-3-8"
            ],
            [
                "Validation",
                "2019-3-8",
                "2019-3-12"
            ],
            [
                "Deployment",
                "2019-3-12",
                "2019-3-18"
            ]
        ];
        \koolreport\apexcharts\TimeLineChart::create(array(
            "dataSource" => $data,
            "jsFiles" => ["moment"],
            "columns" => array(
                "phase" => [
                    "label" => "Phase",
                ],
                'timeline' => [
                    'combination' => [
                        'timeline_start',
                        'timeline_end',
                    ]
                ]
            ),
            "options" => [
                'plotOptions | bar' => [
                    'distributed' => true,
                    'dataLabels | hideOverflowingLabels' => false
                ],
                'dataLabels' => [
                    'formatter' => "function(val, opts) {
                        var label = opts.w.globals.labels[opts.dataPointIndex]
                        var a = moment(val[0])
                        var b = moment(val[1])
                        var diff = b.diff(a, 'days')
                        return label + ': ' + diff + (diff > 1 ? ' days' : ' day')
                    }",
                    'style | colors' => [
                        '#f3f4f5',
                        '#fff'
                    ],
                ],
                'yaxis | show' => false,
                'xaxis | type' => 'datetime',
                'grid | row' => [
                    'colors' => [
                        '#f3f4f5',
                        '#fff'
                    ],
                    'opacity' => 1
                ],
            ],
            "colors" => ["#008FFB", "#00E396", "#775DD0", "#FEB019", "#FF4560"],
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>
