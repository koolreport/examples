<h1 class='title'>Style for Grid</h1>
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
<?php
$data = [
    ['data1' =>  100],
    ['data1' =>  200],
    ['data1' => 1000],
    ['data1' =>  900],
    ['data1' =>  500],
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
    ),
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
));
