How to group similar column cells with `rowspan` property.

```
<?php 
DataTables::create(array(
    ...
    "rowspan" => [0, 1], // group similar cells of the 1st and 2nd columns
));
?>
```