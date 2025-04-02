The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with x axis tick count.

The number of x axis ticks to show.

This option hides tick lines together with tick text. If this option is used on timeseries axis, the ticks position will be determined precisely and not nicely positioned.

For example:

    ...
    "options" => array(
        "data" => array(
            "x" => 'x'
        ),
        "axis" => array(
            "x" => array(
                "type" => 'timeseries',
                "tick" => array(
                    "count" => 4,
                    "format" => '%Y-%m-%d'
                )
            )
        )
    )
    ...
