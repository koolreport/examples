The example demonstrates usage of `RowNumColumn` process, which create one or multiple columns with row ordered number

__Add one rownum column__

```
->pipe(new RowNumColumn("RowNumCol1"))
```

__Add multiple rownum columns__

```
->pipe(new RowNumColumn(array(
    "RowNumCol2", "RowNumCol3"
), 1))
```

__Set starting rownum number__

```
->pipe(new RowNumColumn("RowNumCol1"), 0)
->pipe(new RowNumColumn(array(
    "RowNumCol2", "RowNumCol3"
), 1))
```
