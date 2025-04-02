The above example shows you how to create `PieChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    "options" => array(
        ...
        "pieSliceText" => 'label',
        "slices" => [
            4 => ["offset" => 0.2],
            12 => ["offset" => 0.3],
            14 => ["offset" => 0.4],
            15 => ["offset" => 0.5],
        ]
    )