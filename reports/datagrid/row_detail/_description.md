DataTables supports row detail with `rowDetailData` property. For example:

```
<?php 
DataTables::create(array(
    ...
    "rowDetailData" => function($row) {
        return "Server-built row detail: " . $row['orderDate'];
    },
    // "rowDetailData" => "function(row) {
    //     return 'Client-built row detail: ' + row.orderDate;
    // }",
    // "rowDetailIcon" => false,
    // "rowDetailSelector" => 'td.col-customer-name',
));
?>
```