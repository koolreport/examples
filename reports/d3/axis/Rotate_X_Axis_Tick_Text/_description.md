The above example shows you how to create `ColumnChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with rotate x axis tick text.

Rotate x axis tick text.

If you set negative value, it will rotate to opposite direction.

For example:

    ...
    "options" => array(
        "data" => array(
            'x' => 'x',
        ),
        "axis" => array(
            "x" => array(
                "type" => 'category',
                "tick" => array(
                    "rotate" => 75,
                    "multiline" => false
                ),
                "height" => 130
            )
        )
    )
    ...