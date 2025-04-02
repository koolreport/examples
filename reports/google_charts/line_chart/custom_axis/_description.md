The above example shows you how to create `LineChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    "options" => array(
                "hAxis" => [
                    "title" => 'Year',
                    "textStyle" => [
                        "color" => '#01579b',
                        "fontSize" => 20,
                        "fontName" => 'Arial',
                        "bold" => true,
                        "italic" => true
                    ],
                    "titleTextStyle" => [
                        "color" => '#01579b',
                        "fontSize" => 16,
                        "fontName" => 'Arial',
                        "bold" => false,
                        "italic" => true
                    ]
                ],
                "vAxis" => [
                    "title" => 'Values',
                    "textStyle" => [
                        "color" => '#1a237e',
                        "fontSize" => 24,
                        "bold" => true
                    ],
                    "titleTextStyle" => [
                        "color" => '#1a237e',
                        "fontSize" => 24,
                        "bold" => true
                    ]
                ],
            )