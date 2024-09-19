The above example shows you how to create `AreaChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build an area chart with different boundaries using the <code>fill</code> property.

The following values are supported for fill.
    false
    'origin'
    'start'
    'end'
If no fill property, fill will be true.

For example:

    ...
    'columns' => array(
        'month',
        'Dataset' => array(
            "fill" => 'end'
            ...
        ),
    )
    ...
