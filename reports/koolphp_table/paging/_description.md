If you have a long data, you may organize data in paging with below settings:

```
Table::create(array(
    ...
    "paging"=>array(
        "pageSize"=>10,
        "pageIndex"=>0,
    ),
))
```