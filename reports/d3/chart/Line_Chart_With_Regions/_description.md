The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create LineChart of D3 with regions.

For example:

    ...
    "options" => array(
        "data" => array(
            "regions" => array(
                'data1' => array(
                    array(
                        'start' => 1,
                        'end' => 2,
                        'style' => 'dashed'
                    ),
                    array(
                        'start' => 3
                    )
                ),
                'data2' => array(
                    array(
                        'end' => 3
                    )
                )
            )
        )
    )
    ...