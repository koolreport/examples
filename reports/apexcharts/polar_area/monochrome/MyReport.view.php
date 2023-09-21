<div class="report-content">
    <div class="text-center">
        <h1>PolarAreaChart</h1>
        <p class="lead">
            This example shows how to create beautiful PolarAreaChart
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
                'rose-type',
                'series-1'
            ],
            [
                "Rose A",
                42
            ],
            [
                "Rose B",
                47
            ],
            [
                "Rose C",
                52
            ],
            [
                "Rose D",
                58
            ],
            [
                "Rose E",
                65
            ]
        ];
        \koolreport\apexcharts\PolarAreaChart::create(array(
            // "title" => "Product Trends by Month",
            "dataSource" => $data,
            "columns" => array(
                "rose-type",
                "series-1"
            ),
            "options" => [
                'stroke | colors' => null,
                'legend | position' => 'bottom',
                'plotOptions | polarArea' => [
                    'rings | strokeWidth' => 0,
                    'spokes | strokeWidth' => 0,
                ],
                'theme | monochrome' => [
                    'enabled' => true,
                    'shadeTo' => 'light',
                    'shadeIntensity' => 0.6
                ],
            ],
            'fillOpacity' => 1,
            'strokeWidth' => 1,
            'showYaxis' => false,
            // "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "450px",
        ));
        ?>
    </div>

</div>