The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with style for region.

For example:

    <style>
    .c3-region-0 {
        fill: red;
    }

    .c3-region.foo {
        fill: green;    
    }   
    </style>
    ...
    "options" => array(
        "regions" => array(
            array(
                "start" => 0,
                "end" => 1
            ),
            array(
                "start" => 2,
                "end" => 4,
                "class" => 'foo'
            )
        )
    )