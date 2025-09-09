<?php

use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\ColumnChart;
?>
<html>

<head>
    <link rel="stylesheet" href="../../../assets/bs3/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../assets/bs3/bootstrap-theme.min.css" />
</head>

<body style="">
    <!-- headers' and footers' definition -->
    <defheader name="my1stheader">
        <span>My report first header {date}</span>
    </defheader>
    <defheader name="my2ndheader">
        <span>Page {pageNum}/Total {pageTotal} pages</span>
    </defheader>
    <deffooter name="myfooter">
        <div>My report footer {date}</div>
    </deffooter>

    <firstheader name="my1stheader" />
    <header name="my2ndheader" />
    <footer name="myfooter" />

    <div class="text-center">
        <h1>Cash In Report</h1>
        <h4>This report show the cash-in items</h4>
    </div>
    <hr />

    <?php
    Table::create(array(
        "dataStore" => $this->dataStore('sales'),
        "columns" => array(
            "payment_date" => array(
                "label" => "Payment date",
                "type" => "datetime",
                "format" => "Y-n",
                "displayFormat" => "F, Y",

                "cssStyle" => array(
                    "th" => "padding: 10px; text-align: center;",
                    "td" => "padding: 10px",
                )
            ),
            "amount" => array(
                "label" => "Amount",
                "type" => "number",
                "prefix" => "$",

                "cssStyle" => array(
                    "th" => "padding: 10px; text-align: center;",
                    "td" => "padding: 10px; text-align: right;",
                )
            )
        ),
        "cssClass" => array(
            "table" => "table table-hover table-bordered",
        )
    ));
    ?>
</body>

</html>