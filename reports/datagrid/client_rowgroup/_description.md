DataTables supports row grouping through its RowGroup plugin but its setting is a bit complicated. We simplify that setting with `clientRowGroup` property. For example:

```
<?php 
DataTables::create(array(
    ...
    "clientRowGroup" => [
        "customerName" => [
            'direction' => 'asc', //'asc', 'desc'
            'calculate' => [
                'totalSales' => [
                    'sum', //'sum', 'count', 'avg', 'min', 'max'
                    'dollar_sales'
                    "format" => "function(value) {return value.toFixed(2);}",
                ], 
            ],
            "top" => "<td colspan='999'>{expandCollapseIcon} Top: Customer: {customerName} | Total: {totalSales}</td>",
            "bottom" => "<td colspan='999'>{expandCollapseIcon} Bottom: Customer: {customerName} | Customer sales: {totalSales}</td>",
        ],
        "productLine" => [
            'direction' => 'desc',
            'calculate' => [
                'customAvgSales' => [
                    "aggregate" => "function(rows, group, aggFieldIndex) {
                        return rows
                        .data()
                        .pluck(aggFieldIndex)
                        .reduce( function (a, b) {
                            return a + 1*b.replace(/[^\d\.]/g, '');
                        }, 0) / rows.count()}
                    ",
                    'field' => 'dollar_sales',
                ],
            ],
            "top" => "<td colspan='999'>{expandCollapseIcon} Top: Line: {productLine} | Custom avg: {customAvgSales}",
        ],
    ],
));
?>
```