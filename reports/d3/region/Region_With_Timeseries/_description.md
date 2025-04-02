The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with region timeseries.

Show rectangles inside the chart.

This option accepts array including object that has axis, start, end and class. The keys start, end and class are optional.

axis must be x, y or y2. start and end should be the value where regions start and end. If not specified, the edge values will be used. If timeseries x axis, date string, Date object and unixtime integer can be used. If class is set, the region element will have it as class.

Default: `[]`

For example:

    ...
    "options" => array(
        "axis" => array(
            "x" => array(
                "type" => 'timeseries'
            )
        ),
        "regions" => array(
            array(
                "start" => '2014-01-05',
                "end" => '2014-01-10',
            ),
            array(
                "start" => "2014-01-15",
                "end" => "2014-01-20",
            ),
            array(
                "start" => 1390575600000,
                "end" => 1391007600000
            ),
        )
    )
    ...