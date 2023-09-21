<?php
include "MyReport.php";
$report = new MyReport();
$report->run()->exportToCSV(
    array(
        "dataStores" => array(
            "orders" => [
                "separator" => ";",
                "columns" => array(
                    "customerName",
                    "productName",
                    "productLine",
                    "dollar_sales" => [
                        "footer" => "sum",
                        "footerFormat" => function($value, $colMeta) {
                            return number_format($value, 2);
                        },
                        "footerFormat" => [
                            "decimals" => 2,
                            "thousandSeparator" => ",",
                            "decimalPoint" => "."
                        ],
                        "footerText" => "Total: @value || Count: @countSales || Avg: @avgSales",
                    ]
                ),
                "aggregates" => [
                    "countSales" => [
                        "count", 
                        "dollar_sales",
                        "format" => function($value, $colMeta) {
                            return number_format($value, 0, ".", ",");
                        }
                    ],
                    "avgSales" => [
                        "operator" => "avg", 
                        "field" => "dollar_sales",
                        "format" => [
                            "decimals" => 2,
                            "thousandSeparator" => ",",
                            "decimalPoint" => "."
                        ]
                    ],
                ],
            ],
        ),
    ),
)
    ->toBrowser("orders.csv");
