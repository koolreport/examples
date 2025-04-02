The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with x axis timezone.

Set how to treat the timezone of x values.

If true, treat x value as localtime. If false, convert to UTC internally.

Default: `true`

For example:

    ...
    "options" => array(
        ...
        "axis" => array(
            "x" => array(
                "type" => 'timeseries',
                "localtime" => false,
                "tick" => array(
                    "format" => '%Y-%m-%d %H:%M:%S'
                )
            )
        )
    )
    ...