The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with hide the label of every 2nd dataset, return null to hide the grid line too using the callback.

For example:

    ...
    "xAxes" => array(
        array(
            "display" => true,
            "ticks" => array(
                "callback" => "function(dataLabel, index) {
			return index % 2 === 0 ? dataLabel : '';
		    }"
            )
        )
    ),

