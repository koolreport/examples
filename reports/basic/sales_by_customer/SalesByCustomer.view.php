<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\BarChart;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Sales By Customer</h1>
        <p class="lead">This report shows top 10 sales by customer</p>
    </div>

    <?php
    BarChart::create(array(
            "dataStore"=>$this->dataStore('sales_by_customer'),
            "width"=>"100%",
            "height"=>"500px",
            "columns"=>array(
                "customerName"=>array(
                    "label"=>"Customer"
                ),
        "dollar_sales"=>array(
                    "type"=>"number",
                    "label"=>"Amount",
                    "prefix"=>"$",
                    "emphasis"=>true
                )
            ),
            "options"=>array(
                "title"=>"Sales By Customer",
            )
        ));
    ?>
    <?php
    Table::create(array(
        "dataStore"=>$this->dataStore('sales_by_customer'),
        "columns"=>array(
            "customerName"=>array(
                "label"=>"Customer"
            ),
            "dollar_sales"=>array(
                "type"=>"number",
                "label"=>"Amount",
                "prefix"=>"$",
            )
        ),
        "cssClass"=>array(
            "table"=>"table table-bordered table-striped"
        )
    ));
    ?>
</div>