The example demonstrates usage of `DateTimeFormat` process. The DateTimeFormat used to format the datetime column `from` a format `to` another. The usage is very straight forward, you enter the current format of your datetime column and the format you want to convert to.

The DateTimeFormat support formatting many columns at same time, for example:

```
->pipe(new DateTimeFormat(array(
    "joined_date"=>array(
        "from"=>"Y-m-d H:i:s",
        "to"=>"F jS, Y",
    ),
    "leaved_date"=>array(
        "from"=>"Y-m-d H:i:s",
        "to"=>"F jS, Y",
    ),
)))
```