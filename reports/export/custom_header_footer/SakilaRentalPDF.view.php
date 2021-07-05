<?php

use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\ColumnChart;
use \koolreport\widgets\google\PieChart;
?>
<html>
<style>
    .title {
        text-align: center;
        border: 3px solid green;
    }
</style>
<body style="margin-top:2cm;margin-right:2cm;margin-bottom:2cm;margin-left:3cm;width:100%; margin-top :2cm">
    <link rel="stylesheet" href="../../../assets/bs3/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../assets/bs3/bootstrap-theme.min.css" />
    <div class="title">
        <h1>Report Title</h1>
        <h2>Report Subtitle</h3>
    </div>
    <div class="page-break"></div>

    <div class='page-header' style='height: 50px;'>
        <span style="text-align: center;">Report Header</span>
    </div>
    <div class='page-footer'>
        <span style="text-align: center;">Report Footer - Page {pageNum}</span>
    </div>
    <div class="text-center">
        <h1>Example PDF Custom Header / Footer</h1>
        <h4>This report show the cash-in report per month</h4>
    </div>
    <hr />

    <?php
    ColumnChart::create(array(
        "dataStore" => $this->dataStore('sale_by_month'),
        "columns" => array(
            "payment_date" => array(
                "label" => "Month",
                "type" => "datetime",
                "format" => "Y-n",
                "displayFormat" => "F, Y",
            ),
            "amount" => array(
                "label" => "Amount",
                "type" => "number",
                "prefix" => "$",
            )
        ),
        "width" => "100%",
    ));
    ?>
    <?php
    PieChart::create(array(
        "title" => "Sale Report",
        "dataStore" => $this->dataStore('sale_by_month'),
        "columns" => array(
            "payment_date" => array(
                "label" => "Month",
                "type" => "datetime",
                "format" => "Y-n",
                "displayFormat" => "F, Y",
            ),
            "amount" => array(
                "label" => "Amount",
                "type" => "number",
                "prefix" => "$",
            )
        ),
    ));
    ?>
    <div class="page-break"></div>
    <?php
    Table::create(array(
        "dataStore" => $this->dataStore('sale_by_month'),
        "columns" => array(
            "payment_date" => array(
                "label" => "Month",
                "type" => "datetime",
                "format" => "Y-n",
                "displayFormat" => "F, Y",
            ),
            "amount" => array(
                "label" => "Amount",
                "type" => "number",
                "prefix" => "$",
            )
        ),
        "cssClass" => array(
            "table" => "table table-hover table-bordered"
        )
    ));
    ?>
</body>

</html>