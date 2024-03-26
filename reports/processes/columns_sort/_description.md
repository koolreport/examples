ColumnsSort is a process to sort your data pipe's columns by their names or labels. The sort direct could be ascending, descending, or custom comparative function order.


__Sample code__

```
->pipe(new ColumnsSort(array(
    "{name}" => "asc",
    // "{label}" => "desc",
    // "{name}" => function ($a, $b) { return $a < $b ? -1 : 1; },
    // "{label}" => function ($a, $b) { return $a < $b ? 1 : -1; },
)))
```
