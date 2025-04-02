<div id="report_render">
    <h1 class='title'>Custom Legend</h1>
    <div class="chart"></div>
    <style>
        .legend span {
            width: 33.333333%;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            color: white;
        }
    </style>
    <?php
    $data = [
        ["label" => 'data1', "data" => 100],
        ["label" => 'data2', "data" => 300],
        ["label" => 'data3', "data" => 200]
    ];
    \koolreport\d3\PieChart::create(array(
        "name" => 'MyChart',
        "dataSource" => $data,
        "columns" => array(
            'label',
            'data'
        ),
        "options" => array(
            "data" => array(
                "selection" => array(
                    "enabled" => true
                )
            ),
            "legend" => array(
                "show" => false,
            )
        )
    ));
    ?>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let chart = MyChart.chart();

        let legend = d3.select('#report_render')
            .insert('div', '.chart')
            .attr('class', 'legend');

        legend.selectAll('span')
            .data(['data1', 'data2', 'data3'])
            .enter().append('span')
            .attr('data-id', function(id) {
                return id;
            })
            .html(function(id) {
                return id;
            })
            .each(function(id, index) {
                d3.select(this).style('background-color', chart.color(id));
            })
            .on('mouseover', function(id) {
                chart.focus(id);
            })
            .on('mouseout', function(id) {
                chart.revert();
            })
            .on('click', function(id) {
                chart.toggle(id);
            });
    });
</script>