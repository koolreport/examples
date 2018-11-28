You may set any css style for specific column using `"cssStyle"` property.

```
<?php
Table::create(array(
    "dataSource"=>$this->dataStore('data'),
    "columns"=>array(
        "name",
        "age"=>array(
            "cssStyle"=>"font-weight:bold"
        ),
        "income"=>array(
            "cssStyle"=>"text-align:right"
        )
    )
));
?>
```