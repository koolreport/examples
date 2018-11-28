You can customize the css class given to element in table such as `table`, `tr`, `th`. For example:

```
<style>
    .cssHeader
    {
        background-color:#e9ffe8;
    }
    .cssItem
    {
        background-color:#fdffe8;
    }
</style>
```

```
<?php
Table::create(array(
    "dataSource"=>$this->dataStore('data'),
    "cssClass"=>array(
        "th"=>"cssHeader",
        "tr"=>"cssItem"
    )
));
?>
```