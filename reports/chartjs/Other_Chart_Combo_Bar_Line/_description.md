The above example shows you how to create `ComboChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a combo chart using the <code>type</code> property and specifying the <code>type</code> for each column.

If no type property, type will be bar chart

For example:

    ...
    'columns' => array(
        "month",
        "Dataset 1" => array(
            ...
            "config" => array(
                "type" => "line",
            )
        ),
        "Dataset 2" => array(
            ...
        ),
        "Dataset 3" => array(
            ...
        )
    )
    ...