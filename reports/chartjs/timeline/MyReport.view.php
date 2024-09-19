<?php
    use \koolreport\chartjs\ComboChart;
    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
    );
?>
<div class="report-content">
    <div class="text-center">
        <h1>Timeline Chart</h1>
        <p class="lead">
            This example shows how to create beautiful Timeline chart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    $data1 = [
        ["timelineLabel" => "Cool Graph", "itemLabel" => "Unknown", "start" => "2018-01-22T16:00:00.000Z", "end" => "2018-01-23T05:40:44.626Z"],
        ["timelineLabel" => "Heater", "itemLabel" => "On", "start" => "2018-01-22T16:00:00.000Z", "end" => "2018-01-22T20:00:00.000Z"],
        ["timelineLabel" => "Heater", "itemLabel" => "Off", "start" => "2018-01-22T22:00:00.000Z", "end" => "2018-01-23T03:57:55.437Z"],
        ["timelineLabel" => "Heater", "itemLabel" => "On", "start" => "2018-01-23T04:57:55.437Z", "end" => "2018-01-23T07:40:44.626Z"],
    ];
    $data2 = [
        ["timelineLabel" => "Cool Graph", "itemLabel" => "Unknown", "start" => "2018-01-21", "end" => "2018-01-29"],
        ["timelineLabel" => "Heater", "itemLabel" => "On", "start" => "2018-01-22", "end" => "2018-01-23"],
        ["timelineLabel" => "Heater", "itemLabel" => "Off", "start" => "2018-01-24", "end" => "2018-01-26"],
        ["timelineLabel" => "Heater", "itemLabel" => "On", "start" => "2018-01-26", "end" => "2018-01-30"],
    ];    
    $ds = new \koolreport\core\DataStore($data2);
    \koolreport\chartjs\Timeline::create(array(
        // "data" => $data1,
        "dataSource" => $ds,
        "columns" => [
            "timelineLabel", "start", "end", "itemLabel",
        ],
        "options" => [
            // "elements" => [
            //     "colorFunction" => "function(text, data, dataset, index) {
            //         var colors = ['#000000', 'green', 'blue'];
            //         var color = Color(colors[index]);
            //         console.log(text, data, dataset, index);
            //         // console.log(color);
            //         console.log(dataset._meta[0].index);
            //         return color;
            //     }",
            //     "showText" => true,
            //     "textPadding" => 4,
            // ],
            "showText" => true,
            "textPadding" => 4,
            // "colors" => [
            //     ['blue', 'red', 'green'],
            //     // ['#000000', 'rgba(0,255,0,0.3)']
            // ],
            // "scales" => [
            //     "xAxes" => [
            //         [
            //             "type" => 'timeline',
            //             "position" => 'top',
            //         ]
            //     ]
            // ]
        ],
        // "colorScheme" => ['#000000', 'green', 'blue']
        "colorScheme" => [
            ['blue', 'red', 'green'],
            ['00FFFF', 'rgba(0,255,0,0.3)']
        ],
        "backgroundOpacity" => 0.5,
    ));
    ?>
    </div>
</div>
