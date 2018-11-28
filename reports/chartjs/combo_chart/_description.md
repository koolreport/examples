The above example shows you how to create `ComboChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

Actually there is no ComboChart class rather you can use any chart type and within the configuration of a column, you can define what chart will be used to display this column.

For example:

```
    ...
    "profit"=>array(
        "label"=>"Profit",
        "type"=>"number",
        "prefix"=>"$",
        "config"=>array(
            "type"=>"line",//Line chart is draw
            "borderWidth"=>3,
        )
    ),
    ...
```