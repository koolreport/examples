<?php

use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google\ColumnChart;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Cash In Report</h1>
        <p class="lead">This example show how to set PDF's header and footer</p>
        <a href="export.php" class="btn btn-primary">Download PDF</a>
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
        "paging" => true,
        "cssClass" => array(
            "table" => "table table-hover table-bordered"
        ),
    ));
    ?>
</div>