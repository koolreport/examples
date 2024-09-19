The above example shows you how to create `ScatterChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a multi-axis chart by using <code>yAxisID</code> and <code>xAxisID</code> properties and specifying the <code>yAxisID</code> and <code>xAxisID</code> for each series.

For example:

    ...
    "series" => array(
            array(
                "FirstX", "FirstY",
                array(
                    ...
                    "xAxisID" => "x-axis-1",
                    "yAxisID" => "y-axis-1"
                )
            ),
            array(
                "SecondX", "SecondY",
                array(
                    ...
                    "xAxisID" => "x-axis-1",
                    "yAxisID" => "y-axis-2"
                )
            ),
        ),
        "options" => array(
            ...
            "scales" => array(
                "xAxes" => array(
                    array(
                        ...
                        "id" => 'x-axis-1',
                    )
                ),
                "yAxes" => array(
                    array(
                        ...
                        "id" => 'y-axis-1'
                    ),
                    array(
                        ...
                        "id" => 'y-axis-2',
                    )
                )
            )
        )
        ...
