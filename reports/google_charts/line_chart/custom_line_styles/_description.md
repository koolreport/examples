The above example shows you how to create `LineChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    "options" => array(
        ...
        "colors" => ['#AB0D06', '#007329'],
        "series" => [
            0 => [
                "lineWidth" => 10,
                "lineDashStyle" => [5, 1, 5]
            ],
            1 => [
                "lineWidth" => 5,
                "lineDashStyle" => [7, 2, 4, 3]
            ]
        ]
    )