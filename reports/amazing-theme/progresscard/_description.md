#Introduction

This examples shows you how to use `ProgressCard` to display the most important KPI and its progress.

To make `ProgressCard` is simple:

```
<?php
\koolreport\amazing\ProgressCard::create(array(
    "title"=>"April 2018",
    "infoText"=>"The sale on April 2018 has completed {indicatorValue} of revenue target.",
    "value"=>7500,
    "preset"=>"primary",
    "baseValue"=>10000,
    "format"=>array(
        "value"=>array(
            "prefix"=>"$"
        ),
        "indicator"=>array(
            "decimals"=>0
        )
    ),
    "cssClass"=>array(
        "icon"=>"fa fa-euro"
    ),
));
?>
```

The `baseValue` will be used to calculate percentage of completion for `value`.