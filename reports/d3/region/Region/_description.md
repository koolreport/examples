The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with region.

Show rectangles inside the chart.


This option accepts array including object that has axis, start, end and class. The keys start, end and class are optional.

axis must be x, y or y2. start and end should be the value where regions start and end. If not specified, the edge values will be used. If timeseries x axis, date string, Date object and unixtime integer can be used. If class is set, the region element will have it as class.

Default: `[]`

For example:

    ...
    "options" => array(
        ...
        "regions" => array(
            array(
                "axis" => 'x',
                "end" => 1,
                "class" => 'regionX'
            ),
            array(
                "axis" => 'x',
                "start" => 2,
                "end" => 4,
                "class" => 'regionX'
            ),
            array(
                "axis" => 'x',
                "start" => 5,
                "class" => 'regionX'
            ),
            ...
        )
    )
