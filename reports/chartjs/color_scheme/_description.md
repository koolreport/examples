Above example shows you how to set color scheme for charts. By enter list of colors into `"colorScheme"` property of charts, your charts will have new look. This property is applied to all types of charts.

```
<?php
ColumnChart::create(array(
    ...
    "colorScheme"=>array(
        "#e7717d",
        "#c2cad0",
        "#c2b9b0",
        "#7e685a",
        "#afd275"
    )
));
?>
```