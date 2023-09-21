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

    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                "year",
                "north",
                "south"
            ],
            [
                1996,
                322,
                162
            ],
            [
                1997,
                324,
                90
            ],
            [
                1998,
                329,
                50
            ],
            [
                1999,
                342,
                77
            ],
            [
                2000,
                348,
                35
            ],
            [
                2001,
                334,
                -45
            ],
            [
                2002,
                325,
                -88
            ],
            [
                2003,
                316,
                -120
            ],
            [
                2004,
                318,
                -156
            ],
            [
                2005,
                330,
                -123
            ],
            [
                2006,
                355,
                -88
            ],
            [
                2007,
                366,
                -66
            ],
            [
                2008,
                337,
                -45
            ],
            [
                2009,
                352,
                -29
            ],
            [
                2010,
                377,
                -45
            ],
            [
                2011,
                383,
                -88
            ],
            [
                2012,
                344,
                -132
            ],
            [
                2013,
                366,
                -146
            ],
            [
                2014,
                389,
                -169
            ],
            [
                2015,
                334,
                -184
            ]
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "title" => "Area with Negative Values",
            "dataSource" => $data,
            "columns" => array(
                "year" => [
                    "label" => "Year",
                    "categoryType" => "datetime"
                ],
                "north" => [
                    "label" => "North",
                ], 
                "south" => [
                    "label" => "South",
                ],
            ),
            "options" => [
                'xaxis' => [
                    'axisBorder | show' => false,
                    'axisTicks | show' => false,
                ],
                'yaxis' => [
                    'tickAmount' => 4,
                    'floating' => false,
                    'labels' => [
                        'style | colors' => '#8e8da4',
                        'offsetY' => -7,
                        'offsetX' => 0
                    ],
                    'axisBorder | show' => false,
                    'axisTicks | show' => false,
                ],
                'tooltip' => [
                    'x | format' => 'yyyy',
                    'fixed' => [
                        'enabled' => false,
                        'position' => 'topRight'
                    ]
                ],
                'grid' => [
                    'yaxis | lines | offsetX' => -30,
                    'padding | left' => 20,
                ]
            ],
            "strokeCurve" => "straight",
            'fillOpacity' => 0.5,
            // "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>