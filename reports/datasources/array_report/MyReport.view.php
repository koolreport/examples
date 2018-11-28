<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\PieChart;
?>

<div class='report-content'>
    <div class="text-center">
        <h1>Array Data</h1>
        <p class="lead">This report show how to build report from Array data</p>
    </div>

    <?php
    PieChart::create(array(
        "dataStore"=>$this->dataStore('cost'),  
        "columns"=>array(
            "Item",
            "Cost"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "width"=>"100%",
    ));
    ?>

    <?php
    Table::create(array(
        "dataStore"=>$this->dataStore('cost'),
        "columns"=>array(
            "Item",
            "Cost"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "cssClass"=>array(
            "table"=>"table table-hover table-bordered"
        )
    ));
    ?>
</div>