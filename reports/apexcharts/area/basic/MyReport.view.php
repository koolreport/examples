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
                "date",
                "price"
            ],
            [
                "13 Nov 2017",
                8107.85
            ],
            [
                "14 Nov 2017",
                8128
            ],
            [
                "15 Nov 2017",
                8122.9
            ],
            [
                "16 Nov 2017",
                8165.5
            ],
            [
                "17 Nov 2017",
                8340.7
            ],
            [
                "20 Nov 2017",
                8423.7
            ],
            [
                "21 Nov 2017",
                8423.5
            ],
            [
                "22 Nov 2017",
                8514.3
            ],
            [
                "23 Nov 2017",
                8481.85
            ],
            [
                "24 Nov 2017",
                8487.7
            ],
            [
                "27 Nov 2017",
                8506.9
            ],
            [
                "28 Nov 2017",
                8626.2
            ],
            [
                "29 Nov 2017",
                8668.95
            ],
            [
                "30 Nov 2017",
                8602.3
            ],
            [
                "01 Dec 2017",
                8607.55
            ],
            [
                "04 Dec 2017",
                8512.9
            ],
            [
                "05 Dec 2017",
                8496.25
            ],
            [
                "06 Dec 2017",
                8600.65
            ],
            [
                "07 Dec 2017",
                8881.1
            ],
            [
                "08 Dec 2017",
                9340.85
            ]
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "title" => "Fundamental Analysis of Stocks",
            "subtitle" => "Price Movements",
            "dataSource" => $data,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "price" => array(
                    "label" => "Stock Price",
                    "type" => "number",
                    // "decimals" => 2,
                    // "suffix" => ""
                ),
            ),
            "options" => [],
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            // "width" => "85%",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>