<?php
    use \koolreport\chartjs\BarChart;
    use \koolreport\chartjs\ColumnChart;

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
        <h1>Overlap Chart</h1>
        <p class="lead">
        The example show how to create overlap BarChart and ColumnChart
        </p>
    </div>
    <div style="margin-bottom:50px;">
    <?php
    BarChart::create(array(
        "title"=>"Sale vs Cost on Overlap BarChart",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "config"=>array(
                    "yAxisID"=>"bar-y-sale",
                )
            ),
            "cost"=>array(
                "label"=>"Cost",
                "type"=>"number",
                "prefix"=>"$",
                "config"=>array(
                    "yAxisID"=>"bar-y-cost"
                )
            ),
        ),
        "options"=>array(
            "scales"=>array(
                "yAxes"=>array(
                    array(
                        "stacked"=>true,
                        "id"=>"bar-y-sale",
                        "barThickness"=> 40,
                    ),
                    array(
                        "stacked"=>true,
                        "id"=>"bar-y-cost",
                        "display"=>false,
                        "type"=>"category",
                        "barThickness"=> 20,
                        "categoryPercentage"=> 0.8,
                        "barPercentage"=> 0.9,
                        "offset"=>true,
                    ),
                ),
                "xAxes"=>array(
                    array(
                        "stacked"=>false,
                    )
                )
            )
        )
    ));
    ?>
    </div>
    <div style="margin-bottom:50px;">
    <?php
    ColumnChart::create(array(
        "title"=>"Sale vs Cost on Overlap ColumnChart",
        "dataSource"=>$category_amount,
        "columns"=>array(
            "category",
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
                "config"=>array(
                    "xAxisID"=>"bar-x-sale",
                )
            ),
            "cost"=>array(
                "label"=>"Cost",
                "type"=>"number",
                "prefix"=>"$",
                "config"=>array(
                    "xAxisID"=>"bar-x-cost"
                )
            ),
        ),
        "options"=>array(
            "scales"=>array(
                "yAxes"=>array(
                    array(
                        "stacked"=>false,
                    )
                ),
                "xAxes"=>array(
                    array(
                        "id"=>"bar-x-sale",
                        "stacked"=>true,
                        "barThickness"=> 70,
                    ),
                    array(
                        "id"=>"bar-x-cost",
                        "stacked"=>true,
                        "display"=>false,
                        "barThickness"=> 30,
                        "type"=>"category",
                        "categoryPercentage"=> 0.8,
                        "barPercentage"=> 0.9,
                        "offset"=>true,
                        "gridLines"=> array(
                          "offsetGridLines"=> true
                        ),
                    ),
                )
            )
        )
    ));
    ?>
    </div>
</div>
