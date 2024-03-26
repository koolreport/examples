<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>SuperCube Process</h1>
        <p class="lead">Multi fields columns</p>
    </div>
    
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("origin"),
        "columns" => array(
            "productName", "orderYear", "orderQuarter", "dollar_sales",
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        ),
        "paging"=>array(
            "pageSize"=>5,
            "pageIndex"=>0,
        )
    ));
    ?>

<i class="fa fa-arrow-down" style="font-size:24px;"></i>
<pre style="font-weight:bold"><code>
->pipe(new SuperCube(array(
    "rows" => "customerName",
    
    "sum" => "dollar_sales",
    "count" => "dollar_sales",
    "avg" => "dollar_sales",
    'sum percent' => 'dollar_sales',
)))
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("result"),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        ),
        "paging"=>array(
            "pageSize"=>5,
            "pageIndex"=>0,
        )
    ));
    ?>
    </div>

</div>