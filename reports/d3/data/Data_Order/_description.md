The above example shows you how to create `ColumnChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create column chart with custom data order.

Define the order of the data.

This option changes the order of stacking the data and pieces of pie/donut. If null specified, it will be the order the data loaded. If function specified, it will be used to sort the data and it will receive the data as argument.

Available Values:

`desc`

`asc`

`function (data1, data2) { ... }`

`null`

For example:

    ...
    "options" => array(
            "data" => array(
               ...
                "order" => 'desc'
            ),
            ...
        )