The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with modified tooltip interface.

For example:

    ...
    "tooltips" => array(
        ...
        "yPadding" => 10,
        "xPadding" => 10,
        "caretSize" => 8,
        "backgroundColor" => 'rgba(72, 241, 12, 1)',
        "titleFontColor" => 'black',
        "bodyFontColor" => 'black',
        "borderColor" => 'rgba(0, 0, 0, 1)',
        "borderWidth" => 4
    )
    ...