The example demonstrates usage of `Filter` process with brackets

__Brackets__

```
->pipe(new Filter(array(
    array("income",">","50000"),
    "(",
        array("income","<","70000"),
        "or",
        array("income","<","90000"),
    ")"
)))
```
