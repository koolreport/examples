Sometime you may want to simplify your data flow by taking only some of columns to continue in datapipe. You can do so with OnlyColumn process. This process will act like a filter which only let some specified columns passing through. Other columns will be discarded.


__Sample code__

```
->pipe(new OnlyColumn(array(
    "age", "income"
)))
```
