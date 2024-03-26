The example demonstrates usage of `ColumnMeta` process to change data meta information.

__String meta__

```
->pipe(new ColumnMeta(array(
    "name" => array(
        "label" => "NAME",
        "type" => "string",
        "prefix" => "prefix_",
        "suffix" => "_suffix",
    )
)))
```

__Number meta__

```
->pipe(new ColumnMeta(array(
    "income" => array(
        "type" => "number",
        "decimals" => 2,
        "decimalPoint" => ".",
        "thousandSeparator" => ",",
    )
)))
```

__Datetime meta__

```
->pipe(new ColumnMeta(array(
    "joined_date" => array(
        "type" => "datetime",
        "format" => "Y-m-d H:i:s",
        "displayFormat" => "d-m-Y"
    )
)))
```
