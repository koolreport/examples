The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a stepped line chart using the <code>steppedLine</code> property.

The following values are supported for stepped.
    false: No Step Interpolation (default)
    true: Step-before Interpolation (eq. 'before')
    'before': Step-before Interpolation
    'after': Step-after Interpolation
    'middle': Step-middle Interpolation
If the stepped value is set to anything other than false, tension will be ignored.

For example:

    ...
    "columns" => array(
        "day",
        "steppedLine" => array(
            ...
            "config" => array(
                "steppedLine" => true,
                ...
            )
        )
    )
    ...