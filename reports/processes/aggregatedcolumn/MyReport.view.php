<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>AggregatedColumn Process</h1>
        <p class="lead">This example shows the usage of AggregatedColumn process</p>
    </div>
    
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("origin"),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>

<i class="fa fa-arrow-down" style="font-size:24px;"></i>
<pre style="font-weight:bold"><code>
->pipe(new AggregatedColumn(array(
    "total_cost"=>array("sum","cost"),
    "average_cost"=>array("avg","cost"),
    "min_cost"=>array("min","cost"),
    "max_cost"=>array("max","cost"),
)))
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("result"),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>

</div>