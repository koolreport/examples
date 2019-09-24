<?php
    use \koolreport\d3\FunnelChart;
?>
<div class="report-content" title="">
    <div class="text-center">
        <h1>FunnelChart</h1>
        <p class="lead">
            This example shows how to draw beautiful FunnelChart
        </p>
    </div>

    <div style="margin-bottom:50px;" class="text-center">
    <?php
        FunnelChart::create([
            "dataSource"=>array(
                array("category"=>"Visit","amount"=>5000),
                array("category"=>"Download","amount"=>4000),
                array("category"=>"Initial Checkout","amount"=>2000),
                array("category"=>"Purchase","amount"=>1000),
            ),
            "width"=>480,
            "columns"=>[
                "category",
                "amount"
            ]
        ])
        ?>

    </div>

</div>
