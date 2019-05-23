<?php
    use \koolreport\amazing\GaugeCard;
?>
<div class="report-content" style="padding:15px">
    <div class="text-center">
        <h1>GaugeCard</h1>
        <p class="lead">
            The example shows how to use GaugeCard of Amazing Theme
        </p>
    </div>
    
    <div class="row">
        <div class="col-md-4 offset-md-2">
        <?php
        \koolreport\amazing\GaugeCard::create(array(
            "title"=>"Revenue",
            "value"=>7500,
            "preset"=>"success",
            "baseValue"=>10000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
        ));
        ?>
        </div>
        <div class="col-md-4">
        <?php
        \koolreport\amazing\GaugeCard::create(array(
            "title"=>"Cost",
            "value"=>4000,
            "preset"=>"danger",
            "baseValue"=>5000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "cssClass"=>array(
                "positive"=>"text-danger",
            ),
        ));
        ?>
        </div>
    </div>
</div>