<div id="report_render">
    <h1 class='title'>Flow</h1>
    <?php

    $data = [
        ['x' => '2012-01-01', 'data1' => 230, 'data2' => 190, 'data3' =>  90],
        ['x' => '2012-01-02', 'data1' => 300, 'data2' => 230, 'data3' => 130],
        ['x' => '2012-01-03', 'data1' => 330, 'data2' => 200, 'data3' => 180],
    ];
    \koolreport\d3\LineChart::create(array(
        "name" => "MyChart",
        "dataSource" => $data,
        "columns" => array(
            'x',
            'data1',
            'data2',
            'data3'
        ),
        "options" => array(
            "data" => array(
                "x" => 'x'
            ),
            "axis" => array(
                "x" => array(
                    "type" => 'timeseries',
                    "tick" => array(
                        "format" => '%m/%d'
                    )
                )
            )
        )
    ));
    ?>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            function flowChart(columns, duration, length, to, callback) {
                MyChart.chart().flow({
                    columns: columns,
                    duration: duration,
                    length: length,
                    to: to,
                    done: callback
                });
            }

            flowChart([
                ['x', '2013-01-11', '2013-01-21'],
                ['data1', 500, 200],
                ['data2', 100, 300],
                ['data3', 200, 120],
            ], 1500, undefined, undefined, function() {
                flowChart([
                    ['x', '2013-02-11', '2013-02-12', '2013-02-13', '2013-02-14'],
                    ['data1', 200, 300, 100, 250],
                    ['data2', 100, 90, 40, 120],
                    ['data3', 100, 100, 300, 500]
                ], 1500, 0, undefined, function() {
                    flowChart([
                        ['x', '2013-03-01', '2013-03-02'],
                        ['data1', 200, 300],
                        ['data2', 150, 250],
                        ['data3', 100, 100]
                    ], 1500, 2, undefined, function() {
                        flowChart([
                            ['x', '2013-03-21', '2013-04-01'],
                            ['data1', 500, 200],
                            ['data2', 100, 150],
                            ['data3', 200, 400]
                        ], 1500, undefined, '2013-03-01', null);
                    });
                });
            });
        }, 1000);
    });
</script>