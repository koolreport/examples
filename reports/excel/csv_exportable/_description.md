This example demonstrates how to export datastores to CSV files.

```
$report->exportToCSV(
    array(
        "dataStores" => array(
            "ordersExport" => array(...),
        ),
        "useLocalTempFolder" => true,
        "autoDeleteTempFile" => true,
        "BOM" => false, // default bom = false
        "buffer" => 1000, // unit: KB ~ 1000 bytes. Default buffer = 1000 KB
    ),
)
    ->toBrowser("orders.csv");
```