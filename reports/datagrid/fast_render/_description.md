DataTables supports client-based fast rendering for tens of thousands of row. For example:

```
<?php 
DataTables::create(array(
    ...
    "fastRender" => true,
    "options" => [
        "paging" => true,
        "pageLength" => 10,
    ],
));
?>
```