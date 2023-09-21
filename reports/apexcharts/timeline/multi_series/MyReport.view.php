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
    <script>
        // var script = document.createElement('script');
        // script.src = 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js';
        // if (typeof moment === 'undefined') {
        //     document.head.appendChild(script);
        // }
    </script>
    
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'phase',
                'Bob_start',
                'Bob_end',
                'Joe_start',
                'Joe_end',
            ],
            [
                "Design",
                "2019/3/5",
                "2019/3/8",
                "2019/3/2",
                "2019/3/5"
            ],
            [
                "Code",
                "2019/3/8",
                "2019/3/11",
                "2019/3/6",
                "2019/3/9"
            ],
            [
                "Test",
                "2019/3/11",
                "2019/3/16",
                "2019/3/10",
                "2019/3/19"
            ]
        ];
        \koolreport\apexcharts\TimeLineChart::create(array(
            "dataSource" => $data,
            "jsFiles" => ["moment"],
            "columns" => array(
                "phase" => [
                    "label" => "Phase",
                ],
                'Bob' => [
                    'combination' => [
                        'Bob_start',
                        'Bob_end',
                    ]
                ],
                'Joe' => [
                    'combination' => [
                        'Joe_start',
                        'Joe_end',
                    ]
                ],
            ),
            "options" => [
                'plotOptions | bar | borderRadius' => 10,
                'dataLabels | formatter' => "function(val) {
                    var a = moment(val[0])
                    var b = moment(val[1])
                    var diff = b.diff(a, 'days')
                    return diff + (diff > 1 ? ' days' : ' day')
                }",
                'fill | type' => 'gradient',
                'fill | gradient' => [
                    'shade' => 'light',
                    'type' => 'vertical',
                    'shadeIntensity' => 0.25,
                    'gradientToColors' => null,
                    'inverseColors' => true,
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [
                        50,
                        0,
                        100,
                        100
                    ]
                ],
                'xaxis | type' => 'datetime',
                'legend | position' => 'top',
            ],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>