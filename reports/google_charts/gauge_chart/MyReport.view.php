<?php
    use \koolreport\widgets\google\Gauge;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Gauge</h1>
        <p class="lead">
            This example shows how to use Gauge
        </p>
    </div>
        
    <?php
    Gauge::create(array(
        "title"=>"Sale Report on Stack",
        "dataSource"=>array(
            array("label"=>"Memory","value"=>80),
            array("label"=>"CPU","value"=>55),
            array("label"=>"Nework","value"=>68),
        )
    ));
    ?>
    
</div>
