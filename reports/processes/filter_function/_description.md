The example demonstrates usage of `Filter` process. The filter process is used to filter data by condition.

__function condition__

```
->pipe(new Filter(array(
    function ($row) {
        return ((float) $row['income']) > 50000;
    },
    function ($row) {
        return ((float) $row['income']) < 90000;
    },
)))
```
