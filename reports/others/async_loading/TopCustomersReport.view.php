<?php
    \koolreport\widgets\google\BarChart::create(array(
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