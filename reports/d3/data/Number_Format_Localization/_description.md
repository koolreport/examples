The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with number format localization.

For example:

    ...
    "options" => array(
        ...
        "axis" => array(
            "y" => array(
                "tick" => array(
                    "format" => "function(value) {
                        return d3.format(',')(value).replace(/,/g, ' ');
                    }"
                )
            ),
            "y2" => array(
                "show" => true,
                "tick" => array(
                    "format" => "function(value) {
                        return d3.format(',')(value).replace(/,/g, ' ');
                    }"
                )
            )
        ),
        "tooltip" => array(
            "format" => array(
                "value" => "function(value, ratio, id, index) {
                    if (Number.isInteger(value)) {
                        return d3.format(',')(value).replace(/,/g, ' ');
                    } else {
                        return d3.format(',.2~f')(value).replace(/\./g, ',').replace(/,/g, ' ').replace(/ ([^\ ]+)$/, ',$1');
                    }
                }"
            )
        )
    )