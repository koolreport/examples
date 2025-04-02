The above example shows you how to create `ColumnChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with custom data color.


For example:

    ...
    "options" => array(
        "data" => array(
            "colors" => array(
                "data1" => '#ff0000',
                "data2" => '#00ff00',
                "data3" => '#0000ff',
            ),
            "labels" => true,
            "color" => "function (color) {
                return d3.rgb(color).darker(2);
            }"
        )
    )