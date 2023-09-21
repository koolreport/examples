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
    <div style="margin-bottom:50px;">
        <?php
        $data = [
            [
                'Peter',
                'Johnny',
                'David'
            ],
            [
                5,
                10,
                null
            ],
            [
                5,
                15,
                null
            ],
            [
                10,
                null,
                null
            ],
            [
                8,
                12,
                null
            ],
            [
                7,
                null,
                3
            ],
            [
                5,
                10,
                4
            ],
            [
                4,
                12,
                1
            ],
            [
                null,
                15,
                3
            ],
            [
                null,
                null,
                4
            ],
            [
                null,
                null,
                6
            ],
            [
                10,
                12,
                7
            ],
            [
                10,
                null,
                9
            ],
            [
                7,
                14,
                5
            ],
            [
                8,
                null,
                null
            ],
            [
                6,
                null,
                null
            ],
            [
                9,
                null,
                null
            ]
        ];
        \koolreport\apexcharts\LineChart::create(array(
            "title" => "Missing data (null values)",
            "dataSource" => $data,
            "autoCategoryColumn" => true,
            "keepNullValue" => false,
            "columns" => array(
                'Peter' => [],
                'Johnny' => [],
                'David' => []
            ),
            "options" => [],
            // "showLabel" => true,
            // "height" => "600px",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>