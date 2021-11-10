This exmaple shows how to sort a column with a custom type

```
<?php 
    DataTables::create(array(
        ...
        "columns" => [
            "jobTitle" => [
                'type' => 'customType',
            ],
            "employeeNumber", "firstName", "lastName", "extension"
        ],
    ));
?>
```


