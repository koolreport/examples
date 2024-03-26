TypeAssure is a process to assure that values of columns with meta type 'number' are in fact numeric.

__Sample code__

```
->pipe(new ColumnMeta(array(
    "income" => array(
        "type" => "number"
    )
)))
->pipe(new TypeAssure())
```
