The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with rotated axis.

Rotate x axis tick text.

If you set negative value, it will rotate to opposite direction.

Switch x and y axis position.

Default: `false`

For example:

    ...
    "options" => array(
        ...
        "axis" => array(
            "rotated" => true
        )
    )
    ...