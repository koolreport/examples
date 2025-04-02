The above example shows you how to create `SteppedAreaChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    "options" => array(
        ...
        "isStacked" => true,
        "backgroundColor" => '#ddd',
        "legend" => [
            "position" => 'bottom'
        ],
        "connectSteps" => false,
        "colors" => ['#4374E0', '#53A8FB', '#F1CA3A', '#E49307'],
    )