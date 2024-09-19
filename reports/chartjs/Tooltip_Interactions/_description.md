The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with settings for the values ​​displayed on the tooltip when hovering using the `mode` and `intersect` properties.

Position of the mode. Options are:
    'point'
    'nearest'
    'index'
    'dataset'
    'x'
    'y'

For example:

    ...
    "options" => array(
        ...
        "tooltips" => array(
            "mode" => 'index',
            "intersect" => true
        ),
        "hover" => array(
            "mode" => 'index',
            "intersect" => true
        )
    )
    ...
