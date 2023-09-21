<div class="report-content">
    <div class="text-center">
        <h1>TreeMapChart</h1>
        <p class="lead">
            This example shows how to create beautiful TreeMapChart
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
                'state',
                'population'
            ],
            [
                "Michigan",
                10
            ],
            [
                "California",
                39
            ],
            [
                "Pennsylvania",
                12
            ],
            [
                "Washington",
                7
            ],
            [
                "North Carolina",
                10
            ],
            [
                "Virginia",
                8
            ],
            [
                "Georgia",
                10
            ],
            [
                "Texas",
                30
            ],
            [
                "New York",
                19
            ],
            [
                "Tennessee",
                7
            ],
            [
                "Ohio",
                11
            ],
            [
                "Illinois",
                12
            ],
            [
                "Arizona",
                7
            ],
            [
                "Florida",
                22
            ],
            [
                "New Jersey",
                9
            ]
        ];
        \koolreport\apexcharts\TreeMapChart::create(array(
            "title" => "Distibuted Treemap (different color for each cell)",
            "dataSource" => $data,
            "columns" => array(
                "state" => [
                    "label" => "State"
                ],
                "population" => array(),
            ),
            "options" => [
                'plotOptions | treemap' => [
                    'distributed' => true,
                    'enableShades' => false
                ]
            ],
            'colors' => [
                '#3B93A5',
                '#F7B844',
                '#ADD8C7',
                '#EC3C65',
                '#CDD7B6',
                '#C1F666',
                '#D43F97',
                '#1E5D8C',
                '#421243',
                '#7F94B0',
                '#EF6537',
                '#C0ADDB'
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "height"=> "600px",
            // "width"=> "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>