The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with the y-axis range set using the <code>suggestedMin</code> and <code>suggestedMax</code> properties. The data minimum and maximum used for determining the ticks is Math.min(dataMin, suggestedMin) and Math.max(dataMax, suggestedMax).

For example:

    ...
    "scales" => array(
        "yAxes" => array(
            array(
                "ticks" => array(
                    "suggestedMin" => 10,
                    "suggestedMax" => 50,
                )
            )
        )
    )
    ...


