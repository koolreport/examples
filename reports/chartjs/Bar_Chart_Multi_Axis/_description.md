The above example shows you how to create `BarChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a multi-axis chart by using <code>yAxisID</code> property and specifying the <code>yAxisID</code> for each column.

For example:

    ...
    "columns"=>array(
        "month",
        "series1"=>array(
            ...
            "yAxisID" => "y-axis-1",
        ),
        "series2"=>array(
            ...
            "yAxisID" => "y-axis-2",
        ),
    ),
    "options"=>array(
        ...
        "scales" => array(
            "yAxes" => array(
                array(
                    ...
                    "id" => "y-axis-1"
                ),
                array(
                    ...
                    "id" => "y-axis-2",
                )
            )
        )
    )
    ...