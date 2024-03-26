The example demonstrates usage of `Sort` process. The sort process is used to sort data in `"asc"` or `"desc"` direction.

__Sort multiple columns__

`Sort` process can sort data by multiple columns at the same time. Note that it takes into account the order of name that you input. In below example, the __income__ column will be sort first.

```
->pipe(new Sort(array(
    "income"=>"asc",
    "name"=>"desc",
)))
```