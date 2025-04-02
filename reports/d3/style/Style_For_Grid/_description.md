The above example shows you how to create `LineChart` using D3 package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

The example show how to create line chart with style for grid.

For example:

    <style>
    .c3-xgrid-line line {
        stroke: blue;
    }

    .c3-xgrid-line.grid4 line {
        stroke: pink;
    }

    .c3-xgrid-line.grid4 text {
        fill: pink;
    }

    .c3-ygrid-line line {
        stroke: red;
    }

    .c3-ygrid-line.grid800 line {
        stroke: green;
    }

    .c3-ygrid-line.grid800 text {
        fill: green;
    }
    </style>
    
    ...
    "options" => array(
        "grid" => array(
            "x" => array(
                "lines" => array(
                    array(
                        "value" => 2
                    ),
                    array(
                        "value" => 4,
                        "class" => 'grid4',
                        "text" => 'LABEL 4'
                    )
                )
            ),
            "y" => array(
                "lines" => array(
                    array(
                        "value" => 500
                    ),
                    array(
                        "value" => 800,
                        "class" => 'grid800',
                        "text" => 'LABEL 800'
                    )
                )
            )
        )
    )

