<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\PieChart;
?>
<div class="report-content">

    <div class="text-center">
        <h1>PostgreSQL</h1>
        <p class="lead">This report show how to build report from PostgreSQL data</p>
    </div>

    <?php
    PieChart::create(array(
        "dataStore"=>$this->dataStore('sale_by_month'),  
        "columns"=>array(
            "payment_date"=>array(
                "label"=>"Month",
                "type"=>"datetime",
                "format"=>"Y-n",
                "displayFormat"=>"F, Y",
            ),
            "amount"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "width"=>"100%",
    ));
    ?>
</div>