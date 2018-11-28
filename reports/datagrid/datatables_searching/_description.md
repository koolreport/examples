`DataTables` support total searching. When the searching feature is enable, a search box will appear on top right of DataTables to let user type to search term across all columns.

```
DataTables::create(array(
    ...
    "options"=>array(
        "searching"=>true
    )
));
```