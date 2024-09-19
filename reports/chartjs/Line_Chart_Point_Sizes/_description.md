The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart with different point sizes using the <code>pointRadius</code>, <code>pointHoverRadius</code> properties.

For example:

    ...
    'columns' => array(
        'month',
        'dataset - big points' => array(
            ...
            "pointRadius" => 15,
            "pointHoverRadius" => 10
        ),
        'dataset - individual point sizes' => array(
            ...
            "pointRadius" => [2, 4, 6, 18, 0, 12, 20]
        ),
        'dataset - large pointHoverRadius' => array(
            ...
            "pointHoverRadius" => 30
        ),
        "dataset - large pointHitRadius" => array(
            ...
            "pointHoverRadius" => 20
        )
    )
    ...