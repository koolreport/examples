Having miriad of features including paging, grouping, seaching, `DataTables` is one of the best widgets to represent data in tabular format.

This example show the minimum settings to get DataTables working.

```
<?php 
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employee")
    ));
?>
```

In above example, DataTables use DataStore as the source of data, beside the DataStore which is most used, DataTables like any other KoolReport's widget can recieve data from array or direct SQL query.

__Use array as datasource__

```
<?php 
    DataTables::create(array(
        "dataSource"=>array(
            array("name"=>"Peter","age"=>35),
            array("name"=>"David","age"=>32),
        )
    ));
?>
```

or in table format

```
<?php 
    DataTables::create(array(
        "dataSource"=>array(
            array("name","age"),
            array("Peter",35),
            array("David",32),
        )
    ));
?>
```

__Use SQL query directly__

```
<?php 
    DataTables::create(array(
        "dataSource"=>$this->src("automaker")->query("SELECT * FROM employees")
    ));
?>
```


