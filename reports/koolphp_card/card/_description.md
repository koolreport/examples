#Introduction

This example guides you how to use `Card` to show important KPI value. 

To create `Card` is very easy

```
<?php
Card::create(array(
    "value"=>1233,
    "title"=>"Month Sale",
));
?>
```

The `"value"` is also able to receive data from SQL Query:

```
<?php
Card::create(array(
    "value"=>$this->src("automaker")->query("select sum(amount) from payments"),
    "title"=>"Total Sale",
));
?>
```
