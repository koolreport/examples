<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Join methods</h1>
        <p class="lead">This example shows the usage of DataStore's join, leftJoin, rightJoin, fullJoin methods</p>
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


<!-- <i class="fa fa-arrow-down" style="font-size:24px;"></i> -->
<pre style="font-weight:bold"><code>
$joinDataStore = $this->dataStore("first")->join($this->dataStore("second"), array("first_id"=>"second_id"));
Table::create(array("dataSource" => $joinDataStore));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php
    $joinDataStore = $this->dataStore('first')
        ->join($this->dataStore('second'), array('first_id' => 'second_id'));

    // print_r($join->data());
    Table::create(array(
        "dataSource"=>$joinDataStore,
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>

<pre style="font-weight:bold"><code>
$leftjoinDataStore = $this->dataStore("first")->leftJoin($this->dataStore("second"), array("first_id"=>"second_id"));
Table::create(array("dataSource" => $leftjoinDataStore));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php
    $leftjoinDataStore = $this->dataStore('first')
        ->leftJoin($this->dataStore('second'), array('first_id' => 'second_id'));

    // print_r($join->data());
    Table::create(array(
        "dataSource"=>$leftjoinDataStore,
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>



<pre style="font-weight:bold"><code>
$rightjoinDataStore = $this->dataStore("first")->rightJoin($this->dataStore("second"), array("first_id"=>"second_id"));
Table::create(array("dataSource" => $rightjoinDataStore));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php
    $rightjoinDataStore = $this->dataStore('first')
        ->rightJoin($this->dataStore('second'), array('first_id' => 'second_id'));

    // print_r($join->data());
    Table::create(array(
        "dataSource"=>$rightjoinDataStore,
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>


<pre style="font-weight:bold"><code>
$fulljoinDataStore = $this->dataStore("first")->fullJoin($this->dataStore("second"), array("first_id"=>"second_id"));
Table::create(array("dataSource" => $fulljoinDataStore));
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php
    $fulljoinDataStore = $this->dataStore('first')
        ->fullJoin($this->dataStore('second'), array('first_id' => 'second_id'));

    // print_r($join->data());
    Table::create(array(
        "dataSource"=>$fulljoinDataStore,
        "emptyValue" => "",
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    </div>
</div>