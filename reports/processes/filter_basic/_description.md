The example demonstrates usage of `Filter` process. The filter process is used to filter data by condition.

__Multiple conditions__

```
->pipe(new Filter(array(
    array("income",">","50000"),
    array("income","<","80000"),
)))
```

__OR condition__

```
->pipe(new Filter(array(
    array("income",">","80000"),
    "or",
    array("income","<","60000"),
)))
```
