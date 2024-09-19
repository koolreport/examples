<div id="report_render" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    $steppedLineSettings = [
        ["steppedLine" => false, "label" => 'No Step Interpolation', "color" => "rgb(255, 99, 132)"],
        ["steppedLine" => true, "label" => 'Step Before Interpolation', "color" => "rgb(75, 192, 192)"],
        ["steppedLine" => "before", "label" => 'Step Before Interpolation', "color" => "rgb(75, 192, 192)"],
        ["steppedLine" => "after", "label" => 'Step After Interpolation', "color" => "rgb(153, 102, 255)"],
        ["steppedLine" => "middle", "label" => 'Step Middle Interpolation', "color" => "rgb(54, 162, 235)"],
    ];

    $data = [
        ['day' => 'Day 1', 'steppedLine' => randomScalingFactor()],
        ['day' => 'Day 2', 'steppedLine' => randomScalingFactor()],
        ['day' => 'Day 3', 'steppedLine' => randomScalingFactor()],
        ['day' => 'Day 4', 'steppedLine' => randomScalingFactor()],
        ['day' => 'Day 5', 'steppedLine' => randomScalingFactor()],
        ['day' => 'Day 6', 'steppedLine' => randomScalingFactor()]
    ];
    for ($i = 0; $i < count($steppedLineSettings); $i++) {
    ?>
        <div style="width:500px;margin-left: 40px;margin-right: 40px;margin-bottom: 40px;">
            <?php
            \koolreport\chartjs\LineChart::create(array(
                'dataSource' => $data,
                'columns' => array(
                    "day",
                    "steppedLine" => array(
                        "label" => "steppedLine: " . json_encode($steppedLineSettings[$i]["steppedLine"]),
                        "type" => "number",
                        "config" => array(
                            "steppedLine" => $steppedLineSettings[$i]["steppedLine"],
                            "borderColor" => $steppedLineSettings[$i]["color"],
                            "backgroundColor" => $steppedLineSettings[$i]["color"]
                        )
                    )
                ),
                "options" => array(
                    "responsive" => true,
                    "title" => array(
                        "display" => true,
                        "text" => $steppedLineSettings[$i]["label"]
                    )
                )
            ));
            ?>
        </div>
    <?php
    }
    ?>
</div>