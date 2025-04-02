The above example shows you how to create `ColumnChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create bar chart and convert it to area chart.

For example:

    ...
    "options" => array(
        "data" => array(
            "types" => array(
                "data1" => 'area'
            )
        )
    )