This example demonstrates how to export table with row detail information to an excel file.

```
\koolreport\excel\Table::create(array(
    ...
    "rowDetailTable" => function($row) {
        return 
        [
            [
                [
                    "cellValue" => $row["productName"] . " : " . $row["dollar_sales"],
                    "rowspan" => 3,
                    "colspan" => 2,
                ],
            ],
        ];
    }
));
```