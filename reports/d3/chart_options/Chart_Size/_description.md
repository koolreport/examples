The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with custom size.

The desired width and the desired height of the chart element.

If this option is not specified, the width and the height of the chart will be calculated by the size of the parent element it's appended to.

Default: `undefined`

For example:

    ...
    "options" => array(
            "size" => array(
                "height" => 240,
                "width" => 480
            )
        )
