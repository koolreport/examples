<div class="report-content">
    <div class="text-center">
        <h1>AreaChart</h1>
        <p class="lead">
            This example shows how to create beautiful AreaChart
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
                "date",
                "PRODUCT A",
                "PRODUCT B",
                "PRODUCT C"
            ],
            [
                "2014/1/2",
                50000000,
                null,
                null
            ],
            [
                "2014/1/3",
                60379978,
                150000000,
                null
            ],
            [
                "2014/1/4",
                40493749,
                160379978,
                null
            ],
            [
                "2014/1/5",
                60785250,
                170493749,
                null
            ],
            [
                "2014/1/6",
                67391904,
                160785250,
                null
            ],
            [
                "2014/1/7",
                61576838,
                167391904,
                null
            ],
            [
                "2014/1/8",
                61413854,
                161576838,
                20000000
            ],
            [
                "2014/1/9",
                82177211,
                161413854,
                10379978
            ],
            [
                "2014/1/10",
                103762210,
                152177211,
                30493749
            ],
            [
                "2014/1/11",
                84381072,
                140762210,
                10785250
            ],
            [
                "2014/1/12",
                54352310,
                144381072,
                33901904
            ],
            [
                "2014/1/13",
                65531790,
                154352310,
                11576838
            ],
            [
                "2014/1/14",
                null,
                165531790,
                14413854
            ],
            [
                "2014/1/15",
                null,
                175748881,
                15177211
            ],
            [
                "2014/1/16",
                null,
                187064037,
                16622100
            ],
            [
                "2014/1/17",
                null,
                197520685,
                17381072
            ],
            [
                "2014/1/18",
                null,
                210176418,
                18802310
            ],
            [
                "2014/1/19",
                null,
                196122924,
                15531790
            ],
            [
                "2014/1/20",
                null,
                207337480,
                null
            ]
        ];
        $numberFormat = [
            'type' => 'number',
            // 'formatValue' => function($val) {
            //     if ($val === null) return null;
            //     return number_format($val / 1000000, 2);
            // }
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "title" => "Irregular Data in Time Series",
            "dataSource" => $data,
            "jsFiles" => ["moment"],
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "PRODUCT A" => $numberFormat,
                "PRODUCT B" => $numberFormat,
                "PRODUCT C" => $numberFormat
            ),
            "options" => [
                'chart | zoom | enabled' => false,
                'fill | gradient' => [
                    'shadeIntensity' => 1,
                    'inverseColors' => false,
                    'opacityFrom' => 0.45,
                    'opacityTo' => 0.05,
                    'stops' => [
                        20,
                        100,
                        100,
                        100
                    ]
                ],
                'dataLabels | formatter' => "function(val) {
                    return (val / 1000000).toFixed(2);
                }",
                'yaxis' => [
                    'labels' => [
                        'style | colors' => '#8e8da4',
                        'offsetX' => 0,
                        'formatter' => "function(val) {
                            return (val / 1000000).toFixed(2);
                        }",
                    ],
                    'axisBorder | show' => false,
                    'axisTicks | show' => false,
                ],
                'xaxis' => [
                    'tickAmount' => 8,
                    'min' => 'function() {return new Date("01/01/2014").getTime();}()',
                    'max' => 'function() {return new Date("01/20/2014").getTime();}()',
                    'labels' => [
                        'rotate' => -15,
                        'rotateAlways' => true,
                        "formatter" => 'function(val, timestamp) {
                            // console.log("xaxis formatter");
                            return moment(new Date(timestamp)).format("DD MMM YYYY")
                        }',
                    ],
                ],
                'tooltip | shared' => true,
                'legend' => [
                    'position' => 'top',
                    'horizontalAlign' => 'right',
                    'offsetX' => -10
                ],
                "title" => [
                    "align" => 'left',
                    "offsetX" => 14
                ],
            ],
            'fillType' => 'gradient',
            "markerSize" => 0,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            "keepNullValue" => false,
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>