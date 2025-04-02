<h1 class='title'>Tooltip Format</h1>
<?php
$data = [
    ['data1' =>  30000, 'data2' => 100],
    ['data1' =>  20000, 'data2' => 200],
    ['data1' =>  10000, 'data2' => 100],
    ['data1' =>  40000, 'data2' => 40],
    ['data1' =>  15000, 'data2' => 150],
    ['data1' => 250000, 'data2' => 250]
];

\koolreport\d3\LineChart::create(array(
    "dataSource" => $data,
    "columns" => array(
        'data1',
        'data2',
    ),
    "options" => array(
        "data" => array(
            "axes" => array(
                "data2" => 'y2'
            )
        ),
        "axis" => array(
            "y" => array(
                "tick" => array(
                    "format" => "function(value) {
                        var format = d3.format(\"s\");
                        return format(value);
                    }"
                )
            ),
            "y2" => array(
                "show" => true,
                "tick" => array(
                    "format" => "function(value) {
                        var format = d3.format(\"$\");
                        return format(value);
                    }"
                )
            )
        ),
        "tooltip" => array(
            "format" => array(
                "title" => "function (d) { return 'Data ' + d; }",
                "value" => "function (value, ratio, id) {
                    var format = id === 'data1' ? d3.format(',') : d3.format('$');
                    return format(value);
                }"
            )
        )
    )
));
