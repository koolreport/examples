The above example shows you how to create `ColumnChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    "options" => array(
                ...
                "hAxis" => array(
                    "title" => 'Time of Day',
                    "format" => 'h:mm a',
                    "viewWindow" => array(
                        "min" => [7, 30, 0],
                        "max" => [17, 30, 0]
                    ),
                    "textStyle" => array(
                        "fontSize" => 14,
                        "color" => '#053061',
                        "bold" => true,
                        "italic" => false
                    ),
                    "titleTextStyle" => array(
                        "fontSize" => 18,
                        "color" => '#053061',
                        "bold" => true,
                        "italic" => false
                    )
                ),
                "vAxis" => array(
                    "title" => 'Rating (scale of 1-10)',
                    "textStyle" => array(
                        "fontSize" => 18,
                        "color" => '#67001f',
                        "bold" => false,
                        "italic" => false
                    ),
                    "titleTextStyle" => array(
                        "fontSize" => 18,
                        "color" => '#67001f',
                        "bold" => true,
                        "italic" => false
                    )
                )
            )