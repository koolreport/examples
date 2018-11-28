<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Join</h1>
        <p class="lead">This example shows the usage of Join method</p>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-center">First Table</h5>
            <?php
            Table::create(array(
                "dataSource"=>$this->dataStore("first"),
                "cssClass"=>array(
                    "table"=>"table-bordered table-striped table-hover"
                )
            ));
            ?>        
        </div>
        <div class="col-md-6">
            <h5 class="text-center">Second Table</h5>
            <?php
            Table::create(array(
                "dataSource"=>$this->dataStore("second"),
                "cssClass"=>array(
                    "table"=>"table-bordered table-striped table-hover"
                )
            ));
            ?>        
        </div>
    </div>


<i class="fa fa-arrow-down" style="font-size:24px;"></i>
<pre style="font-weight:bold"><code>
$join = $this->dataStore("first")->join($this->dataStore("second"),array("first_id"=>"second_id"));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php
    $join = $this->dataStore("first")->join($this->dataStore("second"),array("first_id"=>"second_id"));
    Table::create(array(
        "dataSource"=>$join,
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>

</div>