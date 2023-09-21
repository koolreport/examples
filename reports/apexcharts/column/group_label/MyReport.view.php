<div class="report-content">
    <div class="text-center">
        <h1>ColumnChart</h1>
        <p class="lead">
            This example shows how to create beautiful ColumnChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.9/dayjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.9/plugin/quarterOfYear.min.js"></script> -->
    <script>
        KoolReport.load.onDone(function() {
            console.log('koolreport load onDone');
            // dayjs.extend(window.dayjs_plugin_quarterOfYear);
        });
    </script>
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'date',
                'sales'
            ],
            [
                "2019/01/01",
                400
            ],
            [
                "2019/04/01",
                430
            ],
            [
                "2019/07/01",
                448
            ],
            [
                "2019/10/01",
                470
            ],
            [
                "2020/01/01",
                540
            ],
            [
                "2020/04/01",
                580
            ],
            [
                "2020/07/01",
                690
            ],
            [
                "2020/10/01",
                690
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "jsFiles" => ["dayjs", "dayjsQuarter"],
            "onBeforeInit" => "function() {
                console.log('apexcharts onBeforeClientCreate');
                dayjs.extend(window.dayjs_plugin_quarterOfYear);
            }",
            "columns" => array(
                "date" => [
                    "label" => "Date"
                ],
                "sales" => array(),
            ),
            "options" => [
                'xaxis' => [
                    'labels | formatter' => 'function(val) {
                        return "Q" + dayjs(val).quarter()
                    }',
                    'group | style' => [
                        'fontSize' => '10px',
                        'fontWeight' => 700
                    ],
                    'group | groups | 0' => [
                        'title' => '2019',
                        'cols' => 4
                    ],
                    'group | groups | 1' => [
                        'title' => '2020',
                        'cols' => 4
                    ]
                ],
                'tooltip | x | formatter' => 'function(val) {
                    return "Q" + dayjs(val).quarter() + " " + dayjs(val).format("YYYY")
                }',
            ],
            "title" => "Grouped Labels on the X-axis",
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
            "onReady" => "function() {
                console.log('apexcharts onReady');
                // dayjs.extend(window.dayjs_plugin_quarterOfYear);
            }",
        ));
        ?>
    </div>

</div>