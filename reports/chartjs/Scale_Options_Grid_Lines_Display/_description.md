The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with different grid line styles using the `display`, `drawBorder`, `drawOnChartArea` and `drawTicks` properties.

For example:

    ...
    "scales" => array(
        "xAxes" => array(
            array(
                "gridLines" => array(
                    "display"=> true,
                    "drawBorder"=> true,
                    "drawOnChartArea"=> true,
                    "drawTicks"=> false
                )
            )
        ),
        "yAxes" => array(
            array(
                "gridLines" => array(
                    "display"=> true,
                    "drawBorder"=> true,
                    "drawOnChartArea"=> true,
                    "drawTicks"=> false
                ),
                ...
            )
        )
    )
    ...