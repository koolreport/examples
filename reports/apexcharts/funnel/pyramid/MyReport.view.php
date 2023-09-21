<div class="report-content">
    <div class="text-center">
        <h1>FunnelChart</h1>
        <p class="lead">
            This example shows how to create beautiful FunnelChart
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
                'product',
                'sale'
            ],
            [
                "Sweets",
                200
            ],
            [
                "Processed Foods",
                330
            ],
            [
                "Healthy Fats",
                548
            ],
            [
                "Meat",
                740
            ],
            [
                "Beans & Legumes",
                880
            ],
            [
                "Dairy",
                990
            ],
            [
                "Fruits & Vegetables",
                1100
            ],
            [
                "Grains",
                1380
            ]
        ];
        \koolreport\apexcharts\FunnelChart::create(array(
            "title" => "Pyramid Chart",
            "dataSource" => $data,
            "columns" => array(
                "product" => [
                    "label" => "Product"
                ],
                "sale" => array(),
            ),
            "options" => [
                'plotOptions | bar | distributed' => true,
                'dataLabels' => [
                    'formatter' => 'function (val, opt) {
                        return opt.w.globals.labels[opt.dataPointIndex] 
                    }',
                    'dropShadow | enabled' => true,
                ]
            ],
            'colors' => [
                '#F44F5E',
                '#E55A89',
                '#D863B1',
                '#CA6CD8',
                '#B57BED',
                '#8D95EB',
                '#62ACEA',
                '#4BC3E6'
            ],
            "showLegend" => false,
            "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => "800px",
        ));
        ?>
    </div>

</div>