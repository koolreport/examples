The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build line charts with different line styles using the <code>borderDash</code> and <code>fill</code> properties.

For example:

    ...
    'columns' => array(
        'month',
        'Unfilled' => array(
            ...
        ),
        'Dashed' => array(
            "borderDash" => [5, 5],
            ...
        ),
        'Filled' => array(
            "fill" => true,
            ...
        )
    )
    ...