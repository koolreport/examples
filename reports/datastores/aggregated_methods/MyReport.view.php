<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Aggregated Methods</h1>
        <p class="lead">Learn about DataStore's aggregated methods</p>
    </div>
    
    <p>We have <b>$this->dataStore("data")</b> like this:</p>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("data"),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>

<i class="fa fa-arrow-down" style="font-size:24px;"></i>
<pre style="font-weight:bold"><code>
$count = $this->dataStore("data")->count();
$total_income = $this->dataStore("data")->sum("income");
$average_income = $this->dataStore("data")->avg("income");
$min_income = $this->dataStore("data")->min("income");
$max_income = $this->dataStore("data")->max("income");
$mode_income = $this->dataStore("data")->mode("income");
</code></pre>
<i class="fa fa-arrow-down" style="font-size:24px;"></i>


    <div class="row" style="margin-top:20px;">
        <div class="col-md-6">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>
                            Count rows
                        </td>
                        <td><?php echo $this->dataStore("data")->count(); ?></td>
                    </tr>
                    <tr>
                        <td>
                            Total income
                        </td>
                        <td><?php echo $this->dataStore("data")->sum("income"); ?></td>
                    </tr>
                    <tr>
                        <td>
                            Average Income
                        </td>
                        <td><?php echo $this->dataStore("data")->avg("income"); ?></td>
                    </tr>
                    <tr>
                        <td>
                            Min Income
                        </td>
                        <td><?php echo $this->dataStore("data")->min("income"); ?></td>
                    </tr>
                    <tr>
                        <td>
                            Max Income
                        </td>
                        <td><?php echo $this->dataStore("data")->max("income"); ?></td>
                    </tr>
                    <tr>
                        <td>
                            Mode Income
                        </td>
                        <td><?php echo $this->dataStore("data")->mode("income"); ?></td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </div>
    

</div>