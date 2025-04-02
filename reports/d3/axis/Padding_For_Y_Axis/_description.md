The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with padding for y axis.

Set padding for y axis.

You can set padding for y axis to create more space on the edge of the axis. This option accepts object and it can include top and bottom. top, bottom will be treated as pixels.

For example:

    ...
    "options" => array(
        ...
        "axis" => array(
            "y" => array(
                "padding" => array(
                    "top" => 200,
                    "bottom" => 0
                )
            ),
            "y2" => array(
                "padding" => array(
                    "top" => 100,
                    "bottom" => 100
                ),
                "show" => true
            )
        )
    )
    ...
