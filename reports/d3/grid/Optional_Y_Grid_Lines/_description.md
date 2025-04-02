The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with optional y grid lines.

Show additional grid lines along y axis.

This option accepts array including object that has value, text, position and class.

Default: `[]`

For example:

    ...
    "options" => array(
        ...
        "grid" => array(
            "y" => array(
                "lines" => array(
                    array(
                        "value" => 50,
                        "text" => 'Label 50  for  y'
                    ),
                    array(
                        "value" => 1300,
                        "text" => 'Label 1300 for y2',
                        "axis" => 'y2',
                        "position" => 'start'
                    ),
                    array(
                        "value" => 350,
                        "text" => 'Label 350 for y',
                        "position" => 'middle'
                    )
                )
            )
        )
    )
    ...