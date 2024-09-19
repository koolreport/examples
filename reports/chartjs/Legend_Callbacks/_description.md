The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build line chart using mouse events for legend.

For example:

    ...
    "options" => array(
        ...
        "legend" => array(
            "onHover" => "function(event, legendItem) {
				    log('onHover: ' + legendItem.text);
			    }",
            "onLeave" => "function(event, legendItem) {
				    log('onLeave: ' + legendItem.text);
			    }",
            "onClick" => "function(event, legendItem) {
				    log('onClick:' + legendItem.text);
			    }"
        )
    )
    ...
