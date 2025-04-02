The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with x axis tick values.

Set the x values of ticks manually.

If this option is provided, the position of the ticks will be determined based on those values. This option works with timeseries data and the x values will be parsed accoding to the type of the value and `xFormat` option.

Default: `null`

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
                    "values" => array(
                        '2013-01-05',
                        '2013-01-10'
                    )
                )
            )
        )
    )
    ...