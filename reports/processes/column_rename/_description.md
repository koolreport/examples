Sometime you need to change the name of columns for easier access. For example, data loaded from CSV which does not have header will result in column name like "column0", "column1" .. Those name are very hard to remember and access. So we may want to change the "column0" to "id" and "column1" to "name".


__Sample code__

```
->pipe(new ColumnRename(array(
    "name" => "Developer Name",
    "income" => "Developer Income"
)))
```
