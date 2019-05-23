#Introduction

This example shows how to use Amazing Theme's `GaugeCard`. The card is extremely useful when you want to show progress of your project, your revenue compared to last period for example. The gauge card has 5 color preset `prumary`, `success`, `warning`, `danger` and `info` that you can use instantly.

To make `GaugeCard` is easy:

```
<?php
\koolreport\amazing\GaugeCard::create(array(
    "title"=>"Cost",
    "value"=>4000,
    "preset"=>"danger",
    "baseValue"=>5000,
    "format"=>array(
        "value"=>array(
            "prefix"=>"$"
        )
    ),
    "cssClass"=>array(
        "positive"=>"text-danger",
    ),
));
?>
```

The `"value"` is the main value to show. The `"baseValue"` is the value that used to compared, it could be the previous sale amount.