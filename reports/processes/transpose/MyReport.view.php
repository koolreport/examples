<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\PieChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Transpose Process</h1>
        <p class="lead">This example shows the usage of Transpose process</p>
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
->pipe(new Transpose())
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>

    <div style="margin-top:20px;">
        <div class="row">
            <div class="col-md-6">
            <?php
            Table::create(array(
                "dataSource"=>$this->dataStore("result"),
                "cssClass"=>array(
                    "table"=>"table-bordered table-striped table-hover"
                )
            ));
            ?>            
            </div>
            <div class="col-md-6">
            <?php
            PieChart::create(array(
                "dataSource"=>$this->dataStore("result"),
                "columns"=>array("c0","c1"),
                "options"=>array(
                    "legend"=>array(
                        "position"=>"right"
                    ),
                    "chartArea"=>array(
                        "top"=>10,
                        "left"=>0,
                        "right"=>0
                    )
                )
            ));
            ?>
            </div>
        </div>
    
    
    </div>

</div>