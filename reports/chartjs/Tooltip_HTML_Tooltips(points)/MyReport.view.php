<div id="canvas-holder1">
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
                "backgroundColor" => 'rgba(255, 99, 132, 0.2)',
                "borderColor" => 'rgb(255, 99, 132)',
                "pointBackgroundColor" => 'rgb(255, 99, 132)',
                "fill" => true
            ),
            "My Second dataset" => array(
                "backgroundColor" => 'rgba(54, 162, 235, 0.2) ',
                "borderColor" => 'rgb(54, 162, 235) ',
                "pointBackgroundColor" => 'rgb(54, 162, 235)',
                "fill" => true
            )
        ),
        "options" => array(
            "title" => array(
                "display" => true,
                "text" => 'Chart.js - Custom Tooltips using Data Points'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "intersect" => false,
                "enabled" => false,
                "custom" => "function(tooltip) {
                    $(this._chart.canvas).css('cursor', 'pointer');

                    var positionY = this._chart.canvas.offsetTop;
                    var positionX = this._chart.canvas.offsetLeft;

                    $('.chartjs-tooltip').css({
                        opacity: 0,
                    });

                    if (!tooltip || !tooltip.opacity) {
                        return;
                    }

                    if (tooltip.dataPoints.length > 0) {
                        tooltip.dataPoints.forEach(function(dataPoint) {
                            var content = [dataPoint.xLabel, dataPoint.yLabel].join(': ');
                            var \$tooltip = $('#tooltip-' + dataPoint.datasetIndex);

                            \$tooltip.html(content);
                            \$tooltip.css({
                                opacity: 1,
                                top: positionY + dataPoint.y + 'px',
                                left: positionX + dataPoint.x + 'px',
                            });
                        });
                    }
                }",
            )
        )
    ));
    ?>
    <div class="chartjs-tooltip" id="tooltip-0"></div>
    <div class="chartjs-tooltip" id="tooltip-1"></div>
</div>