<h1 class='title'>Region</h1>
<style>
    .c3-region.regionY {
        fill: red;
    }

    .c3-region.regionY2 {
        fill: green;
    }
</style>
<?php
$data = [
    ['data1' =>  30, 'data2' =>  830],
    ['data1' => 200, 'data2' => 1200],
    ['data1' => 100, 'data2' => 1100],
    ['data1' => 400, 'data2' => 1400],
    ['data1' => 150, 'data2' => 1150],
    ['data1' => 250, 'data2' => 1250],
    ['data1' => 400, 'data2' => 1500]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2'
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "data2" => 'y2'
            )
        ),
        "axis" => array(
            "y2" => array(
                "show" => true
            )
        ),
        "regions" => array(
            array(
                "axis" => 'x',
                "end" => 1,
                "class" => 'regionX'
            ),
            array(
                "axis" => 'x',
                "start" => 2,
                "end" => 4,
                "class" => 'regionX'
            ),
            array(
                "axis" => 'x',
                "start" => 5,
                "class" => 'regionX'
            ),
            array(
                "axis" => 'y',
                "end" => 50,
                "class" => 'regionY'
            ),
            array(
                "axis" => 'y',
                "start" => 80,
                "end" => 140,
                "class" => 'regionY'
            ),
            array(
                "axis" => 'y',
                "start" => 400,
                "class" => 'regionY'
            ),
            array(
                "axis" => 'y2',
                "end" => 900,
                "class" => 'regionY2'
            ),
            array(
                "axis" => 'y2',
                "start" => 1150,
                "end" => 1250,
                "class" => 'regionY2'
            ),
            array(
                "axis" => 'y2',
                "start" => 1300,
                "class" => 'regionY2'
            )
        )
    )
));
