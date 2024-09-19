The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build line charts with different point styles using the <code>pointStyle</code> property.

When a string is provided, the following values are supported:
    'circle'
    'cross'
    'crossRot'
    'dash'
    'line'
    'rect'
    'rectRounded'
    'rectRot'
    'star'
    'triangle'
    false
If the value is an image or a canvas element, that image or canvas element is drawn on the canvas using drawImage .

For example:

    ...
    "options" => array(
        ...
        "elements" => array(
            "point" => array(
                "pointStyle" => 'circle'
            )
        )
    )
    ...
