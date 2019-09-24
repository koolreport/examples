<?php
    use \koolreport\d3\DonutChart;

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
        <h1>DonutChart</h1>
        <p class="lead">
            This example shows how to draw beautiful DonutChart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <div class="text-center"><strong>Basic chart</strong></div>
    <?php
    DonutChart::create(array(
        "title"=>"Cost of Good Sold",
        "dataSource"=>$category_amount,
        "columns"=>array("category","cost")
    ));
    ?>
    </div>


    <div style="margin-bottom:50px;">
    <div class="text-center"><strong>Label and tooltip format</strong></div>
    <?php
    DonutChart::create(array(
        "title"=>"Cost of Good Sold",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "cost"
        ),
        "label"=>array(
            "use"=>"ratio",
            "decimals"=>2,
            "suffix"=>"%"
        ),
        "tooltip"=>array(
            "use"=>"value",
            "prefix"=>"$"
        )
    ));
    ?>
    </div>


</div>
