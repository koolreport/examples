`PivotSQL` is a process to prroduce pivot data from large SQL datasets, which is then visualized with `PivotMatrix` widget:

```
->pipe(new \koolreport\pivot\processes\PivotSQL([
    "column" => "orderYear",
    "row" => "customerName",
    "aggregates"=>array(
        "sum"=>"dollar_sales",
    ),
]))
```

In order to use `PivotSQL` users need to turn on PHP's session at the beginning of the page:

```
session_start();
```