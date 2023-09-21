<div class="report-content">
    <div class="text-center">
        <h1>PieChart</h1>
        <p class="lead">
            This example shows how to create beautiful PieChart
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
                'team',
                'series-1'
            ],
            [
                "Team A",
                44
            ],
            [
                "Team B",
                55
            ],
            [
                "Team C",
                13
            ],
            [
                "Team D",
                43
            ],
            [
                "Team E",
                22
            ]
        ];
        \koolreport\apexcharts\PieChart::create(array(
            // "title" => "Pie Chart",
            "dataSource" => $data,
            "columns" => array(
                "team" => array(
                    "label" => "Team"
                ),
                "series-1" => array(),
            ),
            "options" => [
                'responsive | 0' => [
                    'breakpoint' => 480,
                    'options' => [
                        'chart | width' => 200,
                        'legend | position' => 'bottom',
                    ]
                ]
            ],
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>