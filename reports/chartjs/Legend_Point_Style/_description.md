The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build line charts with different point style and point style of legend using the `usePointStyle` and `pointStyle` properties.

For example:

    ...
    'columns' => array(
        "month",
        "My First dataset" => array(
            ...
            "pointStyle" => 'rectRot'
        )
    ),
    "options" => array(
        ...
        "legend" => array(
            'labels' => array(
                "usePointStyle" => false
            )
        ),
    )
