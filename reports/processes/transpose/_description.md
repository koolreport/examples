The example demonstrates usage of `Transpose` process. As the name suggested, Transpose process turn the table 90 degree, making row to column and vice versal. The new column will be named from `c0`, `c1` to `cn`.

If you want to rename column, you may use process `ColumnRename`

```
->pipe(new Transpose())
->pipe(new ColumnRename(array(
    "c0"=>"name"
    "c1"=>"contribution"
)))
```