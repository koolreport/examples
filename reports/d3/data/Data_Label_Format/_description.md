The above example shows you how to create `ColumnChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create column chart with custom data label.

Set formatter function for data labels.

The formatter function receives 4 arguments such as v, id, i, j and it must return a string that will be shown as the label. The arguments are:

`v` is the value of the data point where the label is shown.

`id` is the id of the data where the label is shown.

`i` is the index of the data point where the label is shown.

`j` is the sub index of the data point where the label is shown.

For example:

    ...
    "options" => array(
        "data" => array(
            ...
            "labels" => array(
                "format" => array(
                    "data1" => "function (v, id, i, j) { 
                            return '$' + v; 
                        }"
                )
            )
        ),
        ...
    )