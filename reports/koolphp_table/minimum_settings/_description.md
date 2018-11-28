Getting started with `Table` is very easy! All you need to do is to provide `"dataSource"` for table, for example:

```
<?php
Table::create(array(
    "dataSource"=>$this->dataStore('data')
));
?>
```

__Use SQL Query__

Table can receive direct query, for example:

```
<?php 
Table::create(array(
    "dataSource"=>$this->src("mysql_database")->query("select * from orders")
));
?>
```

__Use Array__

```
<?php 
Table::create(array(
    "dataSource"=>array(
        array("name","age"),
        array("Peter",35),
        array("John",36)
    )
));
?>
```

or associate array

```
<?php 
Table::create(array(
    "dataSource"=>array(
        array("name"=>"Peter","age"=>35),
        array("name"=>"John","age"=>36)
    )
));
?>
```

