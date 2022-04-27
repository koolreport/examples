<?php
include "MyReport.php";
$report = new MyReport([
    "export" => true,
]);
$report->run();
$report->exportToCSV(
    array(
        "dataStores" => array(
            "ordersExport" => [
                "separator" => ",", // default separator = "," i.e. comma
                "enclosure" => "\"", // default general enclosure = "" i.e. empty string
                "enclosure" => ["(", ")"], // all enclosure property could be a 2 element array
                "typeEnclosures" => [
                    "string" => "\"", // default string enclosure is general enclosure
                    "date" => "\"", // default date enclosure is general enclosure
                    "datetime" => "\"", // default datetime enclosure is general enclosure
                    "number" => "", // default number enclosure = "" i.e. empty string
                    "boolean" => "", // default boolean enclosure = "" i.e. empty string
                ],
                'nullEnclosure' => "", // default = "" i.e empty string
                'nullString' => "NULL", // default = false i.e empty string for null value
                'useColumnFormat' => 1, // default = 1, set = 0 to increase export speed
                'useEnclosureEscape' => 1, // default = 1, set = 0 to increase export speed
                'useTypeEnclosure' => 1, // default = 1, set = 0 to increase export speed     
                "escape" => "\\", // if escape is empty/undefined, double enclosures will be used
                "eol" => "\n", // define End of line character, default eol is "\n"
                "columns" => array(
                    "customerName",
                    "productName",
                    "productLine",
                    "orderDate",
                    "orderMonth",
                    "orderYear",
                    "orderQuarter",
                    "dollar_sales" => [
                        "type" => "number",
                        "enclosure" => ["<", ">"], // to apply custom column enclosure "useCustomColumnEnclosure" must be true
                        "headerEnclosure" => "\"",
                        "nullEnclosure" => "",
                        "nullString" => "nULL",
                        "enclosureEscape" => "\"",
                    ]
                ),
                'useCustomColumnEnclosure' => 0, // default = 0
                'useCustomColumnNullString' => 0, // default = 0
                'useCustomColumnEnclosureEscape' => 0, // default = 0             
            ],
        ),

        // General options for all datastores
        "useLocalTempFolder" => true,
        "autoDeleteTempFile" => true,
        "BOM" => true, // default bom = false
        "buffer" => 1000, // unit: KB ~ 1000 bytes. Default buffer = 1000 KB
        // "buffer" => PHP_INT_MAX,        
    ),
)
    ->toBrowser("orders.csv");
