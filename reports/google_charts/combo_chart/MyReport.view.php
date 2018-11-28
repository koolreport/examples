<?php
    use \koolreport\widgets\google\ComboChart;

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
        <h1>ComboChart</h1>
        <p class="lead">
            This example shows how to create beautiful ComboChart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    ComboChart::create(array(
        "title"=>"Sale Report",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$"
            ),
            "cost"=>array(
                "label"=>"Cost",
                "type"=>"number",
                "prefix"=>"$"
            ),
            "profit"=>array(
                "label"=>"Profit",
                "type"=>"number",
                "prefix"=>"$",
                "chartType"=>"line",
            ),
        ),
    ));
    ?>
    </div>
</div>
