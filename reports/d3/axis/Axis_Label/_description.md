The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with axis label.

For example:

    ...
    "options" => array(
        ...
        "axis" => array(
            "x" => array(
                'label' => 'X Label'
            ),
            "y" => array(
                'label' => 'Y Label',
            ),
            "y2" => array(
                "show" => true,
                "label" => "Y2 Label"
            )
        )
    )
    ...