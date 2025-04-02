The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with tooltip format.

Set format for the value of each data in tooltip.


Specified function receives name, ratio, id and index of the data point to show. ratio will be undefined if the chart is not donut/pie/gauge.

If undefined returned, the row of that value will be skipped.

Default: `undefined`

For example:

    ...
    "options" => array(
        ...
        "tooltip" => array(
            "format" => array(
                "title" => "function (d) { return 'Data ' + d; }",
                "value" => "function (value, ratio, id) {
                    var format = id === 'data1' ? d3.format(',') : d3.format('$');
                    return format(value);
                }"
            )
        )
    )