Displaying column headers in group using user defined separator.

```
<?php 
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employee"),
        "complexHeaders" => true,
        "headerSeparator" => "-",
    ));
?>
```
