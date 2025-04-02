The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with x axis tick culling.

Setting for culling ticks.

If true is set, the ticks will be culled, then only limitted tick text will be shown. This option does not hide the tick lines. If false is set, all of ticks will be shown.

We can change the number of ticks to be shown by `max`.

Default:

`true` for indexed axis and timeseries axis.

`false` for category axis.

For example:

    ...
    "options" => array(
        "axis" => array(
            "x" => array(
                "type" => 'category',
                "tick" => array(
                    "culling" => array(
                        "max" => 4
                    )
                )
            )
        )
    )
    ...