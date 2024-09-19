The above example shows you how to create `AreaChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows you how to build an area chart using `stacked` property.

For example:

    ...
    "options" => array(
        ...
        "scales" => array(
            ...
            "yAxes" => array(
                array(
                    "stacked" => true,
                    "scaleLabel" => array(
                        "display" => true,
                        "labelString" => 'Value'
                    )
                )
            )
        )
    )
    ...