The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with x axis tick fitting.

Fit x axis ticks.

If true set, the ticks will be positioned nicely. If false set, the ticks will be positioned according to x value of the data points.

Default: `true`

For example:

    ..."options" => array(
        "axis" => array(
            "x" => array(
                "type" => 'timeseries',
                "tick" => array(
                    "fit" => true,
                    "format" => '%e %b %y'
                )
            )
        )
    )
    ...
