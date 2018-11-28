By default, the sorting feature is enable on the DataTables which allows users to click on table header to sort table by that column. In this example, we would like to show how to preset the order of table on page load. Specifically, the above table is sorted by the __firstName__ column which is at second postion:

```
DataTables::create(array(
    ...
    "options"=>array(
        "orders"=>array(
            array(1,"desc")
        )
    )
));
```