<h1 class='title'>Style for Region</h1>
<style>
    .c3-region-0 {
        fill: red;
    }

    .c3-region.foo {
        fill: green;    
    }
</style>
<?php
$data = [
    ['sample' =>  30],
    ['sample' => 200],
    ['sample' => 100],
    ['sample' => 400],
    ['sample' => 150],
    ['sample' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'sample',
    ),
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
));
