The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a line chart using callback to sum values ​​with same column.

For example:

    ...
    "tooltips" => array(
        ...
        "callbacks" => array(
            "footer" => "function(tooltipItems, data){
                var sum = 0;
                tooltipItems.forEach(function(tooltipItem){
                    sum += data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]; 
                });
                return 'Sum: ' + sum;
            }"
        )
    )
    ...