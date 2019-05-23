#Introduction

This example shows how to create beautiful `DualChartCard` to show your important KPI and two attached nice detail charts. A chart could show number of sale amount while another shows the number of orders.

To make `DualChartCard` is easy:

```
<?php
\koolreport\amazing\DualChartCard::create(array(
    "title"=>"SALE",
    "infoText"=>"December 2018",
    "value"=>7000,
    "baseValue"=>8000,
    "format"=>array(
        "value"=>array(
            "prefix"=>"$"
        )
    ),
    "preset"=>"primary",
    "chart"=>array(
        "dataSource"=>$sale_by_months,
        "columns"=>array(
            "month",
            "amount"=>array(
                "prefix"=>"$",
            )
        )
    ),
    "secondChart"=>array(
        "dataSource"=>$orders_by_months,
        "columns"=>array(
            "month",
            "number"
        )
    ),
    "cssClass"=>array(
        "icon"=>"fa fa-dollars"
    ),
));
?>

```

The card is like any other chart with title and value settings however there is added properties called `chart` and `secondChart` in which you can set datasource for each chart.