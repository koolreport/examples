<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
?>

<div class="report-content">

    <div class="text-center">
        <h1>CSV Report</h1>
        <p class="lead">The report shows how to build report from CSV data</p>
    </div>

    <?php
    ColumnChart::create(array(
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

    <?php
    Table::create(array(
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
        "cssClass"=>array(
            "table"=>"table table-hover table-bordered"
        )
    ));
    ?>

</div>