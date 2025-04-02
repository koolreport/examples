The above example shows you how to create `BarChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    "options" => array(
                "hAxis" => [
                    "title" => 'Total Population',
                    "minValue" => 0,
                    "textStyle" => [
                        "bold" => true,
                        "fontSize" => 12,
                        "color" => '#4d4d4d'
                    ],
                    "titleTextStyle" => [
                        "bold" => true,
                        "fontSize" => 18,
                        "color" => '#4d4d4d'
                    ]
                ],
                "vAxis" => [
                    "title" => 'City',
                    "textStyle" => [
                        "fontSize" => 14,
                        "bold" => true,
                        "color" => '#848484'
                    ],
                    "titleTextStyle" => [
                        "fontSize" => 14,
                        "bold" => true,
                        "color" => '#848484'
                    ]
                ]
            )