#Introduction

This example shows how to use Amazing Theme's `SimpleCard`. The card is extremely useful when you want to show a single meaningful KPI. The simple card has 5 color preset `prumary`, `success`, `warning`, `danger` and `info` that you can use instantly. Still if you want to use your own color, you can use `cssClass` and `cssStyle` properties to set. It is very flexible.

Another nice feature of `SimpleCard` or other kinds of card that you can directly input value from SQL query for example:

```
<?php
\koolreport\amazing\SimpleCard::create(array(
    ...
    "value"=>$this->src("automaker")->query("SELECT SUM(amount) FROM payments"),
    ...
));
?>
```