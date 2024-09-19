The above example shows you how to create `BubbleChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a bubble chart with point size adjusted using the `radius` property.

For example:

    ...
    "options" => array(
        ...
        "elements" => array(
            "point" => array(
                "radius" => "function(context) {
					var value = context.dataset.data[context.dataIndex];
					var size = context.chart.width;
					var base = Math.abs(value.v) / 1000;
					return (size / 24) * base;
				}"
            )
        )
    )
    ...