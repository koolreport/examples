The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with modified tooltip interface using the `custom` property.

For example:

    ...
    "tooltips" => array(
        ...
        "custom" => " function(tooltip) {
            ...
        }
    )
    ...