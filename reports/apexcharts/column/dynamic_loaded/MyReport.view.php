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
    <script>
        Apex = {
            chart: {
                toolbar: {
                    show: false
                }
            },
            tooltip: {
                shared: false
            },
            legend: {
                show: false
            }
        }

        var colors = ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#00D9E9', '#FF66C3'];

        /**
         * Randomize array element order in-place.
         * Using Durstenfeld shuffle algorithm.
         */
        function shuffleArray(array) {
            for (var i = array.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                var temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
            return array;
        }

        var arrayData = [{
            y: 400,
            quarters: [{
                x: 'Q1',
                y: 120
            }, {
                x: 'Q2',
                y: 90
            }, {
                x: 'Q3',
                y: 100
            }, {
                x: 'Q4',
                y: 90
            }]
        }, {
            y: 430,
            quarters: [{
                x: 'Q1',
                y: 120
            }, {
                x: 'Q2',
                y: 110
            }, {
                x: 'Q3',
                y: 90
            }, {
                x: 'Q4',
                y: 110
            }]
        }, {
            y: 448,
            quarters: [{
                x: 'Q1',
                y: 70
            }, {
                x: 'Q2',
                y: 100
            }, {
                x: 'Q3',
                y: 140
            }, {
                x: 'Q4',
                y: 138
            }]
        }, {
            y: 470,
            quarters: [{
                x: 'Q1',
                y: 150
            }, {
                x: 'Q2',
                y: 60
            }, {
                x: 'Q3',
                y: 190
            }, {
                x: 'Q4',
                y: 70
            }]
        }, {
            y: 540,
            quarters: [{
                x: 'Q1',
                y: 120
            }, {
                x: 'Q2',
                y: 120
            }, {
                x: 'Q3',
                y: 130
            }, {
                x: 'Q4',
                y: 170
            }]
        }, {
            y: 580,
            quarters: [{
                x: 'Q1',
                y: 170
            }, {
                x: 'Q2',
                y: 130
            }, {
                x: 'Q3',
                y: 120
            }, {
                x: 'Q4',
                y: 160
            }]
        }];

        function makeData() {
            var dataSet = shuffleArray(arrayData)

            var dataYearSeries = [
                // {
                //     x: "2018",
                //     y: dataSet[0].y,
                //     color: colors[0],
                //     quarters: dataSet[0].quarters
                // },
                // {
                //     x: "2019",
                //     y: dataSet[1].y,
                //     color: colors[1],
                //     quarters: dataSet[1].quarters
                // },
                {
                    x: "2020",
                    y: dataSet[2].y,
                    color: colors[2],
                    quarters: dataSet[2].quarters
                },
                {
                    x: "2021",
                    y: dataSet[3].y,
                    color: colors[3],
                    quarters: dataSet[3].quarters
                },
                {
                    x: "2022",
                    y: dataSet[4].y,
                    color: colors[4],
                    quarters: dataSet[4].quarters
                },
                {
                    x: "2023",
                    y: dataSet[5].y,
                    color: colors[5],
                    quarters: dataSet[5].quarters
                }
            ];

            return dataYearSeries
        }

        function updateQuarterChart(sourceChart, destChartIDToUpdate) {
            var series = [];
            var seriesIndex = 0;
            var colors = []

            if (sourceChart.w.globals.selectedDataPoints[0]) {
                var selectedPoints = sourceChart.w.globals.selectedDataPoints;
                for (var i = 0; i < selectedPoints[seriesIndex].length; i++) {
                    var selectedIndex = selectedPoints[seriesIndex][i];
                    var yearSeries = sourceChart.w.config.series[seriesIndex];
                    series.push({
                        name: yearSeries.data[selectedIndex].x,
                        data: yearSeries.data[selectedIndex].quarters
                    })
                    colors.push(yearSeries.data[selectedIndex].color)
                }

                if (series.length === 0) series = [{
                    data: []
                }]

                return ApexCharts.exec(destChartIDToUpdate, 'updateOptions', {
                    series: series,
                    colors: colors,
                    fill: {
                        colors: colors
                    }
                })
            }
        }
    </script>
    <div style="margin-bottom:50px;">

        <?php
        $data = [
            [
                'month',
                'Net Profit',
                'Revenue',
                'Free Cash Flow'
            ],
            [
                "Feb",
                44,
                76,
                35
            ],
            [
                "Mar",
                55,
                85,
                41
            ],
            [
                "Apr",
                57,
                101,
                36
            ],
            [
                "May",
                56,
                98,
                26
            ],
            [
                "Jun",
                61,
                87,
                45
            ],
            [
                "Jul",
                58,
                105,
                48
            ],
            [
                "Aug",
                63,
                91,
                52
            ],
            [
                "Sep",
                60,
                114,
                53
            ],
            [
                "Oct",
                66,
                94,
                41
            ]
        ];
        \koolreport\apexcharts\ColumnChart::create(array(
            "dataSource" => $data,
            "columns" => array(
                "month" => [
                    "label" => "Month"
                ],
                "Net Profit",
                "Revenue",
                "Free Cash Flow"
            ),
            "options" => [
                'plotOptions | bar' => [
                    'columnWidth' => '55%',
                    'endingShape' => 'rounded'
                ],
                'stroke' => [
                    'width' => 2,
                    'colors' => [
                        'transparent'
                    ]
                ],
                'fill | opacity' => 1,
                'tooltip | y | formatter' => 'function (val) {
                    return "$ " + val + " thousands"
                }',
            ],
            "yTitle" => "$ (thousands)",
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>
    <div id="wrap">
        <select id="model" class="flat-select">
            <option value="iphoneX">iPhone X</option>
            <option value="iphone11">iPhone 11</option>
            <option value="iphone12">iPhone 12</option>
        </select>
        <div id="chart-year"></div>
        <div id="chart-quarter"></div>
    </div>
</div>