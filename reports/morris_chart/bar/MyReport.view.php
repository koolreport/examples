<?php
    use \koolreport\morris_chart\Bar;

    $category_amount = array(
        array("category"=>"Books","sale"=>32000,"cost"=>20000,"profit"=>12000),
        array("category"=>"Accessories","sale"=>43000,"cost"=>36000,"profit"=>7000),
        array("category"=>"Phones","sale"=>54000,"cost"=>39000,"profit"=>15000),
        array("category"=>"Movies","sale"=>23000,"cost"=>18000,"profit"=>5000),
        array("category"=>"Others","sale"=>12000,"cost"=>6000,"profit"=>6000),
    );

    $category_sale_month = array(
        array("category"=>"Books","January"=>32000,"February"=>20000,"March"=>12000),
        array("category"=>"Accessories","January"=>43000,"February"=>36000,"March"=>7000),
        array("category"=>"Phones","January"=>54000,"February"=>39000,"March"=>15000),
        array("category"=>"Others","January"=>12000,"February"=>6000,"March"=>6000),
    );
?>
<div class="report-content">
    <div class="text-center">
        <h1>BarChart</h1>
        <p class="lead">
            This example shows how to use BarChart
        </p>
    </div>
    <div style="margin-bottom:50px;">
    <h6 class="text-center">Sale Report</h6>
    <?php
    Bar::create(array(
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array("label"=>"Sale","type"=>"number","prefix"=>"$"),
            "cost"=>array("label"=>"Cost","type"=>"number","prefix"=>"$"),
            "profit"=>array("label"=>"Profit","type"=>"number","prefix"=>"$"),
        )
    ));
    ?>
    </div>
    <div style="margin-bottom:50px;">
    <h6 class="text-center">Stacked Bar Chart</h6>
    <?php
    Bar::create(array(
        "dataSource"=>$category_sale_month,
        "columns"=>array(
            "category",
            "January"=>array("label"=>"January","type"=>"number","prefix"=>"$"),
            "February"=>array("label"=>"February","type"=>"number","prefix"=>"$"),
            "March"=>array("label"=>"March","type"=>"number","prefix"=>"$"),
        ),
        "options"=>array(
            "stacked"=>true
        )
    ));
    ?>
    </div>
    
</div>
