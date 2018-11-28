<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\GeoChart;
?>
<div class='report-content'>
    <div class="text-center">
        <h1>Sales By Country</h1>
        <p class="lead">The report show total sales on each countries</p>
    </div>

    <?php
    GeoChart::create(array(
        "dataStore"=>$this->dataStore("sales"),
        "columns"=>array(
            "country"=>array(
                "label"=>"Country"
            ),
            "amount"=>array(
                "label"=>"Sales",
                "type"=>"number",
                "prefix"=>"$"
            )
        ),
        "width"=>"100%",
        "options"=>array(
            "showTooltip"=> true,
            "showInfoWindow"=> true        
        )
    ));
    ?>

    <?php
    Table::create(array(
        "dataStore"=>$this->dataStore("sales")->sort(array("amount"=>"desc")),
        "columns"=>array(
            "country"=>array(
                "label"=>"Country"
            ),
            "amount"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "paging"=>array(
            "pageSize"=>10,
        ),
        "cssClass"=>array(
            "table"=>"table table-bordered table-striped"
        )
    ));
    ?>
</div>