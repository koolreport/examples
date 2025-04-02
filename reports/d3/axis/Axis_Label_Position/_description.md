The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with axis label position.

Set the display position of the label relative to the axis.

For example:

    ...
    "options" => array(
        ...
        "axis" => array(
            "x" => array(
                'label' => array(
                    "text" => 'X Label',
                    'position' => 'outer-center'
                )
            ),
            "y" => array(
                'label' => array(
                    "text" => 'Y Label',
                    'position' => 'outer-middle'
                )
            ),
            "y2" => array(
                "show" => true,
                "label" => array(
                    "text" => 'Y2 Label',
                    'position' => 'outer-middle'
                )
            )
        )
    )
    ...