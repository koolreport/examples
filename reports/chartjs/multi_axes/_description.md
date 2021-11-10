This example shows how to build a multi-axis chart by using `axes` property and specifying the `axis` for each column.

For example:

```
    ...
    "columns"=>array(
        "category",
        "sale"=>array(
            ...
            "axis" => "A",
        ),
        "profit"=>array(
            ...
            "axis" => "B",
        ),
    ),
    "axes" => [
        "A" => [
            "type" => "linear",
            ...
        ],
        "B" => [
            "type" => "linear",
            ...
        ],
    ],
    ...
```