<h1>Number Format Localization</h1>
<?php
$data = [
    ['data1' =>  30000, 'data2' =>   100.5],
    ['data1' =>  20000, 'data2' => 1200.46],
    ['data1' =>  10000, 'data2' =>   100.1],
    ['data1' =>  40000, 'data2' =>   40.12],
    ['data1' =>  15000, 'data2' =>   150.1],
    ['data1' => 250000, 'data2' =>     250]
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
                "data2" => 'y2',
            )
        ),
        "axis" => array(
            "y" => array(
                "tick" => array(
                    "format" => "function(value) {
                        return d3.format(',')(value).replace(/,/g, ' ');
                    }"
                )
            ),
            "y2" => array(
                "show" => true,
                "tick" => array(
                    "format" => "function(value) {
                        return d3.format(',')(value).replace(/,/g, ' ');
                    }"
                )
            )
        ),
        "tooltip" => array(
            "format" => array(
                "value" => "function(value, ratio, id, index) {
                    if (Number.isInteger(value)) {
                        return d3.format(',')(value).replace(/,/g, ' ');
                    } else {
                        return d3.format(',.2~f')(value).replace(/\./g, ',').replace(/,/g, ' ').replace(/ ([^\ ]+)$/, ',$1');
                    }
                }"
            )
        )
    )
));
