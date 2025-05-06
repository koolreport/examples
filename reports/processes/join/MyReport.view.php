<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Join processes</h1>
        <p class="lead">This example shows the usage of Join, LeftJoin, RightJoin, FullJoin processes</p>
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


<pre style="font-weight:bold"><code>
$first = $this->src("first");
$second = $this->src("second");
</code></pre>

<!-- <i class="fa fa-arrow-down" style="font-size:24px;"></i> -->
<pre style="font-weight:bold"><code>
$join = new Join($first, $second, array("first_id"=>"second_id"));
$join->pipe($this->dataStore("join_result"));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
    <?php
    // print_r($this->dataStore("result")->data());
    // return;
    Table::create(array(
        "dataSource"=>$this->dataStore("join_result"),
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>


<!-- <i class="fa fa-arrow-down" style="font-size:24px;"></i> -->
<pre style="font-weight:bold"><code>
$leftjoin = new LeftJoin($first, $second, array("first_id"=>"second_id"));
$leftjoin->pipe($this->dataStore("leftjoin_result"));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
    <?php
    // print_r($this->dataStore("result")->data());
    // return;
    Table::create(array(
        "dataSource"=>$this->dataStore("leftjoin_result"),
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>

<!-- <i class="fa fa-arrow-down" style="font-size:24px;"></i> -->
<pre style="font-weight:bold"><code>
$rightjoin = new RightJoin($first, $second, array("first_id"=>"second_id"));
$rightjoin->pipe($this->dataStore("rightjoin_result"));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
    <?php
    // print_r($this->dataStore("result")->data());
    // return;
    Table::create(array(
        "dataSource"=>$this->dataStore("rightjoin_result"),
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>

<!-- <i class="fa fa-arrow-down" style="font-size:24px;"></i> -->
<pre style="font-weight:bold"><code>
$fulljoin = new FullJoin($first, $second, array("first_id"=>"second_id"));
$fulljoin->pipe($this->dataStore("fulljoin_result"));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
    <?php
    // print_r($this->dataStore("result")->data());
    // return;
    Table::create(array(
        "dataSource"=>$this->dataStore("fulljoin_result"),
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>
</div>