You may set custom formatting for column. In this example, we show the red color for those income lower than $70,000 and make it green for income greater than $70,000.

```
<?php
Table::create(array(
    "dataSource"=>$this->dataStore('data'),
    "columns"=>array(
        "name",
        "age",
        "income"=>array(
            "formatValue"=>function($value,$row)
            {
                $color = $value>70000?"#718c00":"#e83e8c";
                return "<span style='color:$color'>$".number_format($value)."</span>";
            }    
        )
    ),
));
?>
```