<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Aggregated Methods</h1>
        <p class="lead">Learn about DataStore's aggregated methods</p>
    </div>
    
    <h5>Original data</h5>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("data"),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>filter()</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->filter("income",">",50000);
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->filter("income",">",50000),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>        
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>filter($callback)</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->filter(function($row){
            return $row["income"]>50000;
        });
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->filter(function($row){
                            return $row["income"]>50000;
                        }),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>        
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>where()</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->where("income",60000);
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->where("income",60000),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>        
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>except()</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->except("income","age");
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->except("income","age"),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>        
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>only()</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->only("name","income");
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->only("name","income"),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>        
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>whereIn()</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->whereIn("name",["John","Marry"]);
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->whereIn("name",["John","Marry"]),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>                
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <b>whereNotIn()</b>
                </div>
                <div class="card-body">
<pre style="font-weight:bold"><code>
$store = $this->dataStore("data")
        ->whereNotIn("name",["John","Marry"]);
</code></pre>
                    <?php
                    Table::create(array(
                        "dataSource"=>$this->dataStore("data")->whereNotIn("name",["John","Marry"]),
                        "cssClass"=>array(
                            "table"=>"table-bordered table-striped table-hover"
                        )
                    ));
                    ?>
                </div>
            </div>                        
        </div>
        <div class="col-md-6">
        
        </div>
    </div>

    

</div>