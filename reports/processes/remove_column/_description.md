Sometime you may want to simplify your data flow by removing some of columns from the datapipe. You can do so with RemoveColumn process. This process will act like a filter which only let other columns except for the columns specified passing through.

__Sample code__

```
->pipe(new RemoveColumn(array(
    "age", "income"
)))
```
