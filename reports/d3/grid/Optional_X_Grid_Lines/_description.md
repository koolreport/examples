The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with optional x grid lines.

Show additional grid lines along x axis.

This option accepts array including object that has value, text, position and class. text, position and class are optional. For position, start, middle and end (default) are available.

If x axis is category axis, value can be category name. If x axis is timeseries axis, value can be date string, Date object and unixtime integer.

Default: `[]`

For example:

    ...
    "options" => array(
        "grid" => array(
            "x" => array(
                "lines" => array(
                    array(
                        "value" => 1,
                        "text" => 'Label 1'
                    ),
                    array(
                        "value" => 3,
                        "text" => 'Label 3',
                        "position" => 'middle'
                    ),
                    array(
                        "value" => 4.5,
                        "text" => 'Label 4.5',
                        "position" => 'start'
                    )
                )
            )
        )
    )
    ...