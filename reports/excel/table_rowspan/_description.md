This example demonstrates how to export table with rowspan option to an excel file.

```
<div>
    <?php
        \koolreport\excel\Table::create(array(
            "dataSource" => $this->dataStore('sales'),
            "columns" => ["customerName", "productLine", "productName", "dollar_sales"],
            "rowspan" => ["customerName", "productLine"],
            "sorting" => [
                'customerName' => 'asc',
                'productLine' => 'asc',
            ],
        ));
    ?>
</div>
```