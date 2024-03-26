The report shows how to compute custom aggregates such as average sales per product line/category.

```
    ->pipe(new Pivot(array(
        "dimensions"=>array(
            "column"=>"orderYear, orderMonth",
            "row"=>"customerName, productLine"
        ),
        "aggregates"=>array(
            "sum"=>"dollar_sales",
            "count distinct" => "productLine",
        ),
        "computations" => array(
            "avgSalesPerDistinctLine" => "{dollar_sales - sum} / {productLine - count distinct}",
            "avgSalesPerDistinctLine" => function($aggRow) {
                return $aggRow["productLine - count distinct"] != 0 ?
                    $aggRow["dollar_sales - sum"] / $aggRow["productLine - count distinct"] : null;
            }
        ),
    )))
```