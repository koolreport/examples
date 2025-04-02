The above example shows you how to create `PieChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create pie chart with label format.

Set formatter for the label on each pie piece.

Default: `undefined`

For example:

    ...
    "options" => array(
            "pie" => array(
                "label" => array(
                    "format" => "function(value, ratio, id){
                        return '$' + value;
                    }"
                )
            )
        )