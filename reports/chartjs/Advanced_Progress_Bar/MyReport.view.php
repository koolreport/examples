<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $data = [
        ['month' => 'January',  'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'February', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'March',    'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'April',    'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'May',      'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'June',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'July',     'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "fill" => false,
                "backgroundColor" => 'rgb(255, 99, 132)',
                "borderColor" => 'rgb(255, 99, 132)'
            ),
            "My Second dataset" => array(
                "fill" => false,
                "backgroundColor" => 'rgb(54, 162, 235)',
                "borderColor" => 'rgb(54, 162, 235)'
            )
        ),
        "options" => array(
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart - Animation Progress Bar'
            ),
            "animation" => array(
                "duration" => 2000,
                "onProgress" => "function(animation) {
                    progress.value = animation.currentStep / animation.numSteps;
                }",
                "onComplete" => "function() {
                    window.setTimeout(function() {
                        progress.value = 0;
                    }, 2000);
                }"
            )
        )
    ));
    ?>
    <progress id="animationProgress" max="1" value="0" style="width: 100%"></progress>
</div>
<script>
    var progress = document.getElementById('animationProgress');
</script>