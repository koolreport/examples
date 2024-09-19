<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'January', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'February', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'March', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'April', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'May', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'June', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'July', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "backgroundColor" => 'rgb(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)',
                'fill' => false
            ),
            "My Second dataset" => array(
                "backgroundColor" => 'rgb(54, 162, 235)',
                "borderColor" => 'rgb(54, 162, 235)',
                'fill' => false
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart - Custom Information in Tooltip'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "callbacks" => array(
                    "footer" => "function(tooltipItems, data){
                        var sum = 0;
                        tooltipItems.forEach(function(tooltipItem){
                            sum += data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]; 
                        });
                        return 'Sum: ' + sum;
                    }"
                ),
                "footerFontStyle" => 'normal'
            ),
            "hover" => array(
                "mode" => "index",
                "intersect" => true
            ),
            "scales" => array(
                "xAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Month'
                        )
                    )
                ),
                "yAxes" => array(
                    array(
                        "display" => true,
                        "scaleLabel" => array(
                            "display" => true,
                            "labelString" => 'Value'
                        )
                    )
                )
            )
        )
    ));
    ?>
</div>
