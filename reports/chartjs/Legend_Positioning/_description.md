The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with different position of legend using the `position` property.

Position of the legend. Options are:
    'top'
    'left'
    'bottom'
    'right'
    'chartArea'
When using the 'chartArea' option the legend position is at the moment not configurable, it will always be on the left side of the chart in the middle.

For example:

    ...
    "options" => array(
        ...
        "legend" => array(
            "position" => 'right'
        )
    )
    ...
