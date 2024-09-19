<?php
    use \koolreport\chartjs\BarChart;
    use \koolreport\chartjs\ColumnChart;
    use \koolreport\chartjs\ComboChart;
    use \koolreport\chartjs\LineChart;
    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>37.5),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>16.3),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>27.8),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>21.7),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>5),
    );
?>
<div class="report-content">
    <div class="text-center">
        <h1>Multi-axis Chart</h1>
        <p class="lead">
            This example shows how to create beautiful multi-axis charts
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php

    BarChart::create(array(
        "title" => "Multi-axis Bar Chart",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "axis" => "A",
            ),
            "profit"=>array(
                "label"=>"Profit",
                "type"=>"number",
                "suffix"=>"%",
                "axis" => "B",
            ),
        ),
        "axes" => [
            "A" => [
                "type" => "linear",
                "ticks" => [
                    "min" => 0,
                    "max" => 60000,
                    "stepSize" => 15000,
                    "fontColor" => "#3366CC",
                    "callback" => "function(value, index, values) {
                        return '$' + value;
                    }"
                ],
            ],
            "B" => [
                "type" => "linear",
                "position" => "top",
                "ticks" => [
                    "min" => 0,
                    "max" => 100,
                    "stepSize" => 25,
                    "fontColor" => "#DC3912",
                    "callback" => "function(value, index, values) {
                        return value + '%';
                    }"
                ],
            ],
        ],
        "options"=>array(
            "tooltips"=>array(
                // "mode"=>"index",
                "mode"=>"nearest",
                "intersect"=>true,
            ),
        ),
        "colorTheme" => ["#3366CC", "#DC3912"]
    ));
    echo '</div><div style="margin-bottom:50px;">';

    ColumnChart::create(array(
        "title" => "Multi-axis Column Chart",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "axis" => "A",
            ),
            "profit"=>array(
                "label"=>"Profit",
                "type"=>"number",
                "suffix"=>"%",
                "axis" => "B",
            ),
        ),
        "axes" => [
            "A" => [
                "type" => "linear",
                "ticks" => [
                    "min" => 0,
                    "max" => 60000,
                    "stepSize" => 15000,
                    "fontColor" => "#3366CC",
                    "callback" => "function(value, index, values) {
                        return '$' + value;
                    }"
                ],
            ],
            "B" => [
                "type" => "linear",
                "position" => "right",
                "ticks" => [
                    "min" => 0,
                    "max" => 100,
                    "stepSize" => 25,
                    "fontColor" => "#DC3912",
                    "callback" => "function(value, index, values) {
                        return value + '%';
                    }"
                ],
            ],
        ],
        "options"=>array(
            "tooltips"=>array(
                // "mode"=>"index",
                "mode"=>"nearest",
                "intersect"=>true,
            ),
        ),
        "colorTheme" => ["#3366CC", "#DC3912"]
    ));
    echo '</div><div style="margin-bottom:50px;">';

    LineChart::create(array(
        "title" => "Multi-axis Line Chart",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "axis" => "A",
            ),
            "profit"=>array(
                "label"=>"Profit",
                "type"=>"number",
                "suffix"=>"%",
                "axis" => "B",
            ),
        ),
        "axes" => [
            "A" => [
                "type" => "linear",
                "ticks" => [
                    "min" => 0,
                    "max" => 60000,
                    "stepSize" => 15000,
                    "fontColor" => "#3366CC",
                    "callback" => "function(value, index, values) {
                        return '$' + value;
                    }"
                ],
            ],
            "B" => [
                "type" => "linear",
                "position" => "right",
                "ticks" => [
                    "min" => 0,
                    "max" => 100,
                    "stepSize" => 25,
                    "fontColor" => "#DC3912",
                    "callback" => "function(value, index, values) {
                        return value + '%';
                    }"
                ],
            ],
        ],
        "options"=>array(
            "tooltips"=>array(
                // "mode"=>"index",
                "mode"=>"nearest",
                "intersect"=>true,
            ),
            "elements" => [
                "line" => [
                  "tension" => 0, // disables bezier curves
                ],
                "point" =>  [
                  "radius" => 4,
                  "borderWidth" => 2,
                  "pointStyle" => 'circle'
                ],
            ],      
        ),
        "colorTheme" => ["#3366CC", "#DC3912"]
    ));
    echo '</div><div style="margin-bottom:50px;">';

    ComboChart::create(array(
        "title" => "Multi-axis Combo Chart",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "axis" => "A",
            ),
            "profit"=>array(
                "label"=>"Profit",
                "type"=>"number",
                "suffix"=>"%",
                "axis" => "B",
                "chartType" => "line",
                "fill" => false,
            ),
        ),
        "axes" => [
            "A" => [
                "type" => "linear",
                "ticks" => [
                    "min" => 0,
                    "max" => 60000,
                    "stepSize" => 15000,
                    "fontColor" => "#3366CC",
                    "callback" => "function(value, index, values) {
                        return '$' + value;
                    }"
                ],
            ],
            "B" => [
                "type" => "linear",
                "position" => "right",
                "ticks" => [
                    "min" => 0,
                    "max" => 100,
                    "stepSize" => 25,
                    "fontColor" => "#DC3912",
                    "callback" => "function(value, index, values) {
                        return value + '%';
                    }"
                ],
            ],
        ],
        "options"=>array(
            "tooltips"=>array(
                // "mode"=>"index",
                "mode"=>"nearest",
                "intersect"=>true,
            ),
            "elements" => [
                "line" => [
                  "tension" => 0, // disables bezier curves
                ],
                "point" =>  [
                  "radius" => 4,
                  "borderWidth" => 2,
                  "pointStyle" => 'circle'
                ],
            ],      
        ),
        "colorTheme" => ["#3366CC", "#DC3912"]
    ));

    ?>
    </div>
</div>
