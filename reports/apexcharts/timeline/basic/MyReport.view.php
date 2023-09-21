<div class="report-content">
    <div class="text-center">
        <h1>TimeLineChart</h1>
        <p class="lead">
            This example shows how to create beautiful TimeLineChart
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
                'phase',
                'timeline_start',
                'timeline_end',
            ],
            [
                "Analysis",
                "2019/2/27",
                "2019/3/4"
            ],
            [
                "Design",
                "2019/3/4",
                "2019/3/8"
            ],
            [
                "Coding",
                "2019/3/7",
                "2019/3/10"
            ],
            [
                "Testing",
                "2019/3/8",
                "2019/3/12"
            ],
            [
                "Deployment",
                "2019/3/12",
                "2019/3/17"
            ]
        ];
        \koolreport\apexcharts\TimeLineChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "phase" => [
                    "label" => "Phase",
                ],
                'timeline' => [
                    "label" => "Timeline",
                    'combination' => [
                        'timeline_start',
                        'timeline_end',
                    ]
                ],
                // 'timeline',
            ),
            // "combinedColumns" => [
            //     'timeline' => ['timeline_start', 'timeline_end']
            // ],
            "options" => [
                'xaxis | type' => 'datetime',
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