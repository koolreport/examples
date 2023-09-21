This example demonstrates how to export table with complex headers to an excel file.

```
<div>
    <?php
    \koolreport\Excel\Table::create(array(
        ...
        "columns"=>array(
            "productName",
            "orderYear" => ["label" => "Date-Year"],
            "orderMonth" => ["label" => "Date-Month"],
            "orderDay" => ["label" => "Date-Day"],
            "dollar_sales"=>array(
                "type"=>"number",
                "decimals" => 2,
            )
        ),
        "complexHeaderLabels" => true,        
    ));
    ?>
</div>
```