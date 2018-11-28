<?php

    use \koolreport\chartjs\BubbleChart;
    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
    );
    $time_sale = array(
        array("month"=>"January","sale"=>32000,"cost"=>40000),
        array("month"=>"February","sale"=>48000,"cost"=>39000),
        array("month"=>"March","sale"=>35000,"cost"=>38000),
        array("month"=>"April","sale"=>40000,"cost"=>37000),
        array("month"=>"May","sale"=>60000,"cost"=>45000),
        array("month"=>"June","sale"=>73000,"cost"=>47000),
        array("month"=>"July","sale"=>80000,"cost"=>60000),
        array("month"=>"August","sale"=>78000,"cost"=>65000),
        array("month"=>"September","sale"=>60000,"cost"=>45000),
        array("month"=>"October","sale"=>83000,"cost"=>71000),
        array("month"=>"November","sale"=>45000,"cost"=>40000),
        array("month"=>"December","sale"=>39000,"cost"=>60000),
    );
    $category_sale_month = array(
        array("category"=>"Books","January"=>32000,"February"=>20000,"March"=>12000),
        array("category"=>"Accessories","January"=>43000,"February"=>36000,"March"=>7000),
        array("category"=>"Phones","January"=>54000,"February"=>39000,"March"=>15000),
        array("category"=>"Others","January"=>12000,"February"=>6000,"March"=>6000),
    );

    $height_weight_smokers = array(
        array("height","weight","smokers"),
        array(170,82,123),
        array(180,91,45),
        array(150,60,14),
        array(152,55,55),
        array(168,65,223),
        array(178,67,55),
        array(185,46,223),
        array(166,77,55),
        array(153,50,77),
        array(166,44,155),
    )
?>
<div class="container box-container">
    <div class="text-center">
        <h1>BubbleChart</h1>
        <p class="lead">
            This example shows how to create BubbleChart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    BubbleChart::create(array(
        "title"=>"Height, Weight vs Number of Smokers",
        "dataSource"=>$height_weight_smokers,
        "series"=>array(
            array("height","weight","smokers",array(
                "label"=>"Height, Weight and Smokers"
            )),
        ),
        "scale"=>0.7
    ));
    ?>
    </div>

</div>
