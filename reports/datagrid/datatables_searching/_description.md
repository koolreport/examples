`DataTables` supports total searching. When the searching feature is enable, a search box will appear on top right of DataTables to let user type to search term across all columns.

By default, searching is performed automatically when search input is changed. You could disable this automatic search by setting `searchOnEnter` to true so that searching only works when users click Enter in search input.

You could enable "or" operator for searching with `searchMode` set to "or". In this mode the search input is splitted into multiple search terms.

```
DataTables::create(array(
    ...
    "options"=>array(
        "searching"=>true
    ),
    "searchOnEnter" => true,
    "searchMode" => "or"
));
```