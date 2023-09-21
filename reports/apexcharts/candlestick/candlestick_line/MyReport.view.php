<div class="report-content">
    <div class="text-center">
        <h1>CandleStickChart</h1>
        <p class="lead">
            This example shows how to create beautiful CandleStickChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data_line = [
            [
                "datetime",
                "line",
            ],
            [
                "10/6/2018, 5:30:00 AM",
                6604
            ],
            [
                "10/6/2018, 6:30:00 AM",
                6602
            ],
            [
                "10/6/2018, 3:30:00 PM",
                6607
            ],
            [
                "10/7/2018, 11:00:00 AM",
                6620
            ]
        ];
        $data_candlestick = [
            [
                'datetime',
                'open',
                'high',
                'low',
                'close',
            ],
            [
                "10/6/2018, 5:30:00 AM",
                6629.81,
                6650.5,
                6623.04,
                6633.33
            ],
            [
                "10/6/2018, 6:00:00 AM",
                6632.01,
                6643.59,
                6620,
                6630.11
            ],
            [
                "10/6/2018, 6:30:00 AM",
                6630.71,
                6648.95,
                6623.34,
                6635.65
            ],
            [
                "10/6/2018, 7:00:00 AM",
                6635.65,
                6651,
                6629.67,
                6638.24
            ],
            [
                "10/6/2018, 7:30:00 AM",
                6638.24,
                6640,
                6620,
                6624.47
            ],
            [
                "10/6/2018, 8:00:00 AM",
                6624.53,
                6636.03,
                6621.68,
                6624.31
            ],
            [
                "10/6/2018, 8:30:00 AM",
                6624.61,
                6632.2,
                6617,
                6626.02
            ],
            [
                "10/6/2018, 9:00:00 AM",
                6627,
                6627.62,
                6584.22,
                6603.02
            ],
            [
                "10/6/2018, 9:30:00 AM",
                6605,
                6608.03,
                6598.95,
                6604.01
            ],
            [
                "10/6/2018, 10:00:00 AM",
                6604.5,
                6614.4,
                6602.26,
                6608.02
            ],
            [
                "10/6/2018, 10:30:00 AM",
                6608.02,
                6610.68,
                6601.99,
                6608.91
            ],
            [
                "10/6/2018, 11:00:00 AM",
                6608.91,
                6618.99,
                6608.01,
                6612
            ],
            [
                "10/6/2018, 11:30:00 AM",
                6612,
                6615.13,
                6605.09,
                6612
            ],
            [
                "10/6/2018, 12:00:00 PM",
                6612,
                6624.12,
                6608.43,
                6622.95
            ],
            [
                "10/6/2018, 12:30:00 PM",
                6623.91,
                6623.91,
                6615,
                6615.67
            ],
            [
                "10/6/2018, 1:00:00 PM",
                6618.69,
                6618.74,
                6610,
                6610.4
            ],
            [
                "10/6/2018, 1:30:00 PM",
                6611,
                6622.78,
                6610.4,
                6614.9
            ],
            [
                "10/6/2018, 2:00:00 PM",
                6614.9,
                6626.2,
                6613.33,
                6623.45
            ],
            [
                "10/6/2018, 2:30:00 PM",
                6623.48,
                6627,
                6618.38,
                6620.35
            ],
            [
                "10/6/2018, 3:00:00 PM",
                6619.43,
                6620.35,
                6610.05,
                6615.53
            ],
            [
                "10/6/2018, 3:30:00 PM",
                6615.53,
                6617.93,
                6610,
                6615.19
            ],
            [
                "10/6/2018, 4:00:00 PM",
                6615.19,
                6621.6,
                6608.2,
                6620
            ],
            [
                "10/6/2018, 4:30:00 PM",
                6619.54,
                6625.17,
                6614.15,
                6620
            ],
            [
                "10/6/2018, 5:00:00 PM",
                6620.33,
                6634.15,
                6617.24,
                6624.61
            ],
            [
                "10/6/2018, 5:30:00 PM",
                6625.95,
                6626,
                6611.66,
                6617.58
            ],
            [
                "10/6/2018, 6:00:00 PM",
                6619,
                6625.97,
                6595.27,
                6598.86
            ],
            [
                "10/6/2018, 6:30:00 PM",
                6598.86,
                6598.88,
                6570,
                6587.16
            ],
            [
                "10/6/2018, 7:00:00 PM",
                6588.86,
                6600,
                6580,
                6593.4
            ],
            [
                "10/6/2018, 7:30:00 PM",
                6593.99,
                6598.89,
                6585,
                6587.81
            ],
            [
                "10/6/2018, 8:00:00 PM",
                6587.81,
                6592.73,
                6567.14,
                6578
            ],
            [
                "10/6/2018, 8:30:00 PM",
                6578.35,
                6581.72,
                6567.39,
                6579
            ],
            [
                "10/6/2018, 9:00:00 PM",
                6579.38,
                6580.92,
                6566.77,
                6575.96
            ],
            [
                "10/6/2018, 9:30:00 PM",
                6575.96,
                6589,
                6571.77,
                6588.92
            ],
            [
                "10/6/2018, 10:00:00 PM",
                6588.92,
                6594,
                6577.55,
                6589.22
            ],
            [
                "10/6/2018, 10:30:00 PM",
                6589.3,
                6598.89,
                6589.1,
                6596.08
            ],
            [
                "10/6/2018, 11:00:00 PM",
                6597.5,
                6600,
                6588.39,
                6596.25
            ],
            [
                "10/6/2018, 11:30:00 PM",
                6598.03,
                6600,
                6588.73,
                6595.97
            ],
            [
                "10/7/2018, 12:00:00 AM",
                6595.97,
                6602.01,
                6588.17,
                6602
            ],
            [
                "10/7/2018, 12:30:00 AM",
                6602,
                6607,
                6596.51,
                6599.95
            ],
            [
                "10/7/2018, 1:00:00 AM",
                6600.63,
                6601.21,
                6590.39,
                6591.02
            ],
            [
                "10/7/2018, 1:30:00 AM",
                6591.02,
                6603.08,
                6591,
                6591
            ],
            [
                "10/7/2018, 2:00:00 AM",
                6591,
                6601.32,
                6585,
                6592
            ],
            [
                "10/7/2018, 2:30:00 AM",
                6593.13,
                6596.01,
                6590,
                6593.34
            ],
            [
                "10/7/2018, 3:00:00 AM",
                6593.34,
                6604.76,
                6582.63,
                6593.86
            ],
            [
                "10/7/2018, 3:30:00 AM",
                6593.86,
                6604.28,
                6586.57,
                6600.01
            ],
            [
                "10/7/2018, 4:00:00 AM",
                6601.81,
                6603.21,
                6592.78,
                6596.25
            ],
            [
                "10/7/2018, 4:30:00 AM",
                6596.25,
                6604.2,
                6590,
                6602.99
            ],
            [
                "10/7/2018, 5:00:00 AM",
                6602.99,
                6606,
                6584.99,
                6587.81
            ],
            [
                "10/7/2018, 5:30:00 AM",
                6587.81,
                6595,
                6583.27,
                6591.96
            ],
            [
                "10/7/2018, 6:00:00 AM",
                6591.97,
                6596.07,
                6585,
                6588.39
            ],
            [
                "10/7/2018, 6:30:00 AM",
                6587.6,
                6598.21,
                6587.6,
                6594.27
            ],
            [
                "10/7/2018, 7:00:00 AM",
                6596.44,
                6601,
                6590,
                6596.55
            ],
            [
                "10/7/2018, 7:30:00 AM",
                6598.91,
                6605,
                6596.61,
                6600.02
            ],
            [
                "10/7/2018, 8:00:00 AM",
                6600.55,
                6605,
                6589.14,
                6593.01
            ],
            [
                "10/7/2018, 8:30:00 AM",
                6593.15,
                6605,
                6592,
                6603.06
            ],
            [
                "10/7/2018, 9:00:00 AM",
                6603.07,
                6604.5,
                6599.09,
                6603.89
            ],
            [
                "10/7/2018, 9:30:00 AM",
                6604.44,
                6604.44,
                6600,
                6603.5
            ],
            [
                "10/7/2018, 10:00:00 AM",
                6603.5,
                6603.99,
                6597.5,
                6603.86
            ],
            [
                "10/7/2018, 10:30:00 AM",
                6603.85,
                6605,
                6600,
                6604.07
            ],
            [
                "10/7/2018, 11:00:00 AM",
                6604.98,
                6606,
                6604.07,
                6606
            ]
        ];
        $data = \koolreport\apexcharts\Chart::mergeDatasets($data_line, $data_candlestick);
        \koolreport\apexcharts\ComboChart::create(array(
            "title" => "CandleStick Chart",
            "dataSource" => $data,
            "columns" => array(
                'datetime' => [
                    "categoryType" => "datetime",
                ],
                'line' => [
                    'chartType' => 'line',
                ],
                'candlestick' => [
                    'combination' => [
                        'open',
                        'high',
                        'low',
                        'close',
                    ],
                    'chartType' => 'candlestick',
                ],
            ),
            "options" => [
                'tooltip | shared' => true,
                'tooltip | custom' => [
                    'function({seriesIndex, dataPointIndex, w}) {
                        return w.globals.series[seriesIndex][dataPointIndex]
                    }',
                    "function({ seriesIndex, dataPointIndex, w }) {
                        var o = w.globals.seriesCandleO[seriesIndex][dataPointIndex]
                        var h = w.globals.seriesCandleH[seriesIndex][dataPointIndex]
                        var l = w.globals.seriesCandleL[seriesIndex][dataPointIndex]
                        var c = w.globals.seriesCandleC[seriesIndex][dataPointIndex]
                        return (
                            '<div class=\"apexcharts-tooltip-candlestick\">' +
                            '<div>Open: <span class=\"value\">' +
                            o +
                            '</span></div>' +
                            '<div>High: <span class=\"value\">' +
                            h +
                            '</span></div>' +
                            '<div>Low: <span class=\"value\">' +
                            l +
                            '</span></div>' +
                            '<div>Close: <span class=\"value\">' +
                            c +
                            '</span></div>' +
                            '</div>'
                        )
                    }"
                ]
            ],
            'markersSize' => 5,
            'strokeWidth' => [
                3,
                1
            ],
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>