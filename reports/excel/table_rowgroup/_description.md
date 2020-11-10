This example demonstrates how to export multi-level row groups with table to an excel file.

```
<div>
    <?php
    \koolreport\Excel\Table::create(array(
        ...
        "rowGroup" => [
            "customerName" => [
                'direction' => 'desc',
                'calculate' => [
                    'totalSales' => ['sum', 'dollar_sales']
                ],
                "top" => "Customers: {customerName}",
                "columnTops" => [
                    "dollar_sales" => "Total sales: {totalSales}"
                ],
                "bottom" => "Customers: {customerName}",
                "columnBottoms" => [
                    "dollar_sales" => "Total sales: {totalSales}"
                ],
            ],
            "productLine" => [
                "top" => "Product line: {productLine}",
            ]
        ]
    ));
    ?>
</div>
```