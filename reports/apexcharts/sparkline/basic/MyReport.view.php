<div class="report-content">
    <div class="text-center">
        <h1>SparkLines</h1>
        <p class="lead">
            This example shows how to create beautiful SparkLines
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }

        .row {
            overflow: hidden;
            max-width: 890px;
            margin: 30px auto;
            display: flex;
        }

        .col-md-4 {
            width: 33.33%;
            padding: 0 25px;
        }

        table {
            width: 100%;
        }

        tbody tr {
            border-top: 1px solid #e7e7e7;
        }

        th {
            font-weight: bold;
            font-family: Helvetica;
            padding-bottom: 20px;
        }

        td,
        th {
            width: 25%;
            text-align: center;
            height: 65px;
        }

        td div {
            margin: 0 auto;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        @media only screen and (max-width: 480px) {

            th:first-child,
            td:first-child {
                display: none;
            }

            .row {
                display: block;
            }

            .col-md-4 {
                padding: 0;
                width: 100%;
            }
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $data_spark_1 = [
            [
                'series-1'
            ],
            [
                54
            ],
            [
                27
            ],
            [
                35
            ],
            [
                65
            ],
            [
                51
            ],
            [
                46
            ],
            [
                27
            ],
            [
                41
            ],
            [
                39
            ],
            [
                54
            ],
            [
                56
            ],
            [
                19
            ],
            [
                62
            ],
            [
                45
            ],
            [
                61
            ],
            [
                43
            ],
            [
                37
            ],
            [
                53
            ],
            [
                38
            ],
            [
                31
            ],
            [
                24
            ],
            [
                93
            ],
            [
                35
            ],
            [
                47
            ]
        ];
        $data_spark_2 = [
            [
                'series-1'
            ],
            [
                45
            ],
            [
                46
            ],
            [
                65
            ],
            [
                24
            ],
            [
                53
            ],
            [
                27
            ],
            [
                27
            ],
            [
                37
            ],
            [
                54
            ],
            [
                35
            ],
            [
                38
            ],
            [
                41
            ],
            [
                43
            ],
            [
                31
            ],
            [
                51
            ],
            [
                35
            ],
            [
                93
            ],
            [
                61
            ],
            [
                47
            ],
            [
                56
            ],
            [
                39
            ],
            [
                19
            ],
            [
                62
            ],
            [
                54
            ]
        ];
        $data_spark_3 = [
            [
                'series-1'
            ],
            [
                53
            ],
            [
                56
            ],
            [
                61
            ],
            [
                35
            ],
            [
                51
            ],
            [
                62
            ],
            [
                47
            ],
            [
                65
            ],
            [
                31
            ],
            [
                43
            ],
            [
                27
            ],
            [
                19
            ],
            [
                24
            ],
            [
                93
            ],
            [
                54
            ],
            [
                27
            ],
            [
                39
            ],
            [
                38
            ],
            [
                41
            ],
            [
                37
            ],
            [
                54
            ],
            [
                45
            ],
            [
                35
            ],
            [
                46
            ]
        ];
        $data_1 = [
            [
                'series-1'
            ],
            [
                25
            ],
            [
                66
            ],
            [
                41
            ],
            [
                89
            ],
            [
                63
            ],
            [
                25
            ],
            [
                44
            ],
            [
                12
            ],
            [
                36
            ],
            [
                9
            ],
            [
                54
            ]
        ];
        $data_2 = [
            [
                'series-1'
            ],
            [
                12
            ],
            [
                14
            ],
            [
                2
            ],
            [
                47
            ],
            [
                42
            ],
            [
                15
            ],
            [
                47
            ],
            [
                75
            ],
            [
                65
            ],
            [
                19
            ],
            [
                14
            ]
        ];
        $data_3 = [
            [
                'series-1'
            ],
            [
                43
            ],
            [
                32
            ],
            [
                12
            ],
            [
                9
            ]
        ];
        $data_4 = [
            [
                'series-1'
            ],
            [
                43
            ],
            [
                32
            ],
            [
                12
            ],
            [
                9
            ]
        ];
        $data_5 = [
            [
                'series-1'
            ],
            [
                25
            ],
            [
                66
            ],
            [
                41
            ],
            [
                89
            ],
            [
                63
            ],
            [
                25
            ],
            [
                44
            ],
            [
                12
            ],
            [
                36
            ],
            [
                9
            ],
            [
                54
            ]
        ];
        $data_6 = [
            [
                'series-1'
            ],
            [
                12
            ],
            [
                14
            ],
            [
                2
            ],
            [
                47
            ],
            [
                42
            ],
            [
                15
            ],
            [
                47
            ],
            [
                75
            ],
            [
                65
            ],
            [
                19
            ],
            [
                14
            ]
        ];
        $data_7 = [
            [
                'series-1'
            ],
            [
                45
            ]
        ];
        $data_8 = [
            [
                'series-1'
            ],
            [
                53
            ],
            [
                67
            ]
        ];
        $generalOptions = [
            'markers | size' => 0,
            'tooltip | fixed | enabled' => true,
            'stroke' => [
                'curve' => 'straight',
                'width' => 3
            ],
            'fill | opacity' => 0.3,
            'yaxis | min' => 0,
            'title | style | fontSize' => '24px',
            'subtitle | style | fontSize' => '14px',
        ];
        ?>
    </div>

    <div>
        <div class="row">
            <div class="col-md-4">
                <?php
                \koolreport\apexcharts\AreaChart::create(array(
                    "dataSource" => $data_spark_1,
                    "columns" => array(
                        "series-1",
                    ),
                    "options" => $generalOptions,
                    "sparkline" => true,
                    'colors' => [
                        '#DCE6EC'
                    ],
                    "title" => "$424,652",
                    "subtitle" => "Sales",
                    "height" => 160,
                ));
                // return;
                ?>
            </div>
            <div class="col-md-4">
                <?php
                \koolreport\apexcharts\AreaChart::create(array(
                    "dataSource" => $data_spark_2,
                    "columns" => array(
                        "series-1",
                    ),
                    "options" => $generalOptions,
                    "sparkline" => true,
                    'colors' => [
                        '#DCE6EC'
                    ],
                    "title" => "$235,312",
                    "subtitle" => "Expenses",
                    "height" => "160px",
                ));
                ?>
            </div>
            <div class="col-md-4">
                <?php
                \koolreport\apexcharts\AreaChart::create(array(
                    "dataSource" => $data_spark_3,
                    "columns" => array(
                        "series-1",
                    ),
                    "options" => $generalOptions,
                    "sparkline" => true,
                    "title" => "$135,965",
                    "subtitle" => "Profits",
                    "height" => "160px",
                ));
                ?>
            </div>
        </div>

        <div class="row">
            <table>
                <thead>
                    <th>Total Value</th>
                    <th>Percentage of Portfolio</th>
                    <th>Last 10 days</th>
                    <th>Volume</th>
                </thead>
                <tbody>
                    <tr>
                        <td>$32,554</td>
                        <td>15%</td>
                        <td>
                            <?php
                            \koolreport\apexcharts\LineChart::create(array(
                                "dataSource" => $data_1,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [
                                    'tooltip' => [
                                        'x | show' => false,
                                        'y | title | formatter' => 'function (seriesName) {
                                            return "";
                                        }',
                                    ]
                                ],
                                "sparkline" => true,
                                "showMarker" => false,
                                "strokeCurve" => "straight",
                                "strokeWidth" => 3,
                                "height" => "35px",
                                "width" => "100px",
                            ));
                            ?>
                        </td>
                        <td>
                            <?php
                            \koolreport\apexcharts\ColumnChart::create(array(
                                "dataSource" => $data_5,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [
                                    'plotOptions | bar | columnWidth' => '80%',
                                    'xaxis | crosshairs | width' => 1,
                                    'tooltip' => [
                                        'x | show' => false,
                                        'y | title | formatter' => 'function (seriesName) {
                                            return "";
                                        }',
                                    ],
                                ],
                                "sparkline" => true,
                                "showMarker" => false,
                                "height" => "35px",
                                "width" => "100px",
                            ));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>$23,533</td>
                        <td>7%</td>
                        <td>
                            <?php
                            \koolreport\apexcharts\LineChart::create(array(
                                "dataSource" => $data_2,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [
                                    'tooltip' => [
                                        'x | show' => false,
                                        'y | title | formatter' => 'function (seriesName) {
                                            return "";
                                        }',
                                    ],
                                ],
                                "sparkline" => true,
                                "showMarker" => false,
                                "strokeCurve" => "straight",
                                "strokeWidth" => 3,
                                "height" => "35px",
                                "width" => "100px",
                            ));
                            ?>
                        </td>
                        <td>
                            <?php
                            \koolreport\apexcharts\ColumnChart::create(array(
                                "dataSource" => $data_6,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [
                                    'plotOptions | bar | columnWidth' => '80%',
                                    'xaxis | crosshairs | width' => 1,
                                    'tooltip' => [
                                        'x | show' => false,
                                        'y | title | formatter' => 'function (seriesName) {
                                            return "";
                                        }',
                                    ]
                                ],
                                "sparkline" => true,
                                "showMarker" => false,
                                "height" => "35px",
                                "width" => "100px",
                            ));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>$54,276</td>
                        <td>9%</td>
                        <td>
                            <?php
                            \koolreport\apexcharts\PieChart::create(array(
                                "dataSource" => $data_3,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [],
                                "sparkline" => true,
                                "strokeWidth" => 1,
                                "height" => "40px",
                                "width" => "40px",
                            ));
                            ?>
                        </td>
                        <td>
                            <?php
                            \koolreport\apexcharts\RadialBarChart::create(array(
                                "dataSource" => $data_7,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [
                                    'tooltip | theme' => 'dark',
                                    'plotOptions | radialBar' => [
                                        'hollow | margin' => 0,
                                        'hollow | size' => '50%',
                                        'track | margin' => 0,
                                        'dataLabels | show' => false,
                                    ]
                                ],
                                "sparkline" => true,
                                "height" => "50px",
                                "width" => "50px",
                            ));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>$11,533</td>
                        <td>2%</td>
                        <td>
                            <?php
                            \koolreport\apexcharts\DonutChart::create(array(
                                "dataSource" => $data_4,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [],
                                "sparkline" => true,
                                "strokeWidth" => 1,
                                "height" => "40px",
                                "width" => "40px",
                            ));
                            ?>
                        </td>
                        <td>
                            <?php
                            \koolreport\apexcharts\RadialBarChart::create(array(
                                "dataSource" => $data_8,
                                "columns" => array(
                                    "series-1",
                                ),
                                "options" => [
                                    'tooltip | theme' => 'dark',
                                    'plotOptions | radialBar' => [
                                        'hollow | margin' => 0,
                                        'hollow | size' => '50%',
                                        'track | margin' => 1,
                                        'dataLabels | show' => false,
                                    ]
                                ],
                                "sparkline" => true,
                                "height" => "40px",
                                "width" => "40px",
                            ));
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>