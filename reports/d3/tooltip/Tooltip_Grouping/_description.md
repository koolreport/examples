The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart tooltip grouping.

Set if tooltip is grouped or not for the data points.

Default: `true`

For example:

    ...
    "options" => array(
        "tooltip" => array(
            "grouped" => false
        )
    )