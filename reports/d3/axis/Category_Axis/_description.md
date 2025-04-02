The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with category axis.

Set category names on category axis.

This must be an array that includes category names in string. If category names are included in the date by data.x option, this is not required.

For example:

    ...
    "options" => array(
            "axis" => array(
                "x" => array(
                    "type" => 'category',
                    "categories" => array(
                        'cat1',
                        'cat2',
                        'cat3',
                        ...
                    )
                )
            )
        )
        ...