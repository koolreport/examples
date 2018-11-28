The example demonstrates usage of `TimeBucket` process. The TimeBucket work on the `datetime` `date` and `time` column to put those date time into a separate bucket for example week, month or year. This process normally is used with `Group` process to provide grouping.

```
->pipe(new TimeBucket(array(
    "orderDate"=>"month"
)))
->pipe(new Group(array(
    "by"=>"orderDate",
    "sum"=>"amount"
)))
```