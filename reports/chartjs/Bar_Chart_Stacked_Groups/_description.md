The above example shows you how to create `BarChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a stacked column chart using the <code>stacked</code> property and specifying the <code>stack</code> for each column.

For example:

    ...
    "columns" => array(
        "month",
        "Dataset 1" => array(
            ...
            "config" => array(
                "stack" => 'Stack 0'
            )
        ),
        "Dataset 2" => array(
            ...
            "config" => array(
                "stack" => 'Stack 0'
            )
        ),
        "Dataset 3" => array(
            ...
            "config" => array(
                "stack" => 'Stack 1'
            )
        )
    ),
    "options" => array(
        ...
        "scales" => array(
            "xAxes" => array(
                array(
                    "stacked" => true,
                )
            ),
            "yAxes" => array(
                array(
                    "stacked" => true,
                )
            )
        )
    )
    ...