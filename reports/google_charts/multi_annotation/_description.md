The example shows how to add mutiple annotations for each data series.

```
ColumnChart::create(array(
    ...
    "columns"=>array(
        "category",
        "sale"=>array("label"=>"Sale","type"=>"number","prefix"=>"$"),
        "saleAnnotation1" => array(
            "role" => "annotation",
            "formatValue" => function($value, $row) {
                return $row["sale"];
            },
        ),
        "saleAnnotation2" => array(
            "role" => "annotation",
            "formatValue" => function($value, $row) {
                return $row["category"] . ":";
            },
        ),
    )
));
```