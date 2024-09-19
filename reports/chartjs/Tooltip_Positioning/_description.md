The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with the position of the tooltip relative to the point using the `position` property.

Possible modes are:
    'average'
    'nearest'
'average' mode will place the tooltip at the average position of the items displayed in the tooltip. 'nearest' will place the tooltip at the position of the element closest to the event position.

You can also define custom position modes.

For example:

    ...
    "options" => array(
        ...
        "tooltips" => array(
            "position" => 'average'
            ...
        )
    )
    ...