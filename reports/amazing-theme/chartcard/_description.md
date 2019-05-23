#Introduction

This example shows how to create beautiful `ChartCard` to show your important KPI and an attached nice detail chart.

To make `ChartCard` is easy:

```
<?php
\koolreport\amazing\ChartCard::create(array(
    "title"=>"Member Online",
    "value"=>56000,
    "preset"=>"primary",
    "chart"=>array(
        "dataSource"=>$this->dataStore("member_online_in_year")
    ),
    "cssClass"=>array(
        "icon"=>"icon-people"
    ),
));
?>
```

The card is like any other chart with title and value settings however there is added properties called `chart` in which you can set datasource for chart.