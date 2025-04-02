The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with hide legend.

If true given, all legend will be hidden. If string or array given, only the legend that has the id will be hidden.

Default: `false`

For example:

    ...
    "options" => array(
        "legend" => array(
            "show" => false
        )
    )