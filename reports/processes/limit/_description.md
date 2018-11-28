The example demonstrates usage of `Limit` process. The filter process is used to limit data. In above example, the process will return 2 rows and starting at row 0. The format is

```
->pipe(new Limit(array($size,$offset)))
```

__Short form__

Most of the case we return the first number of rows so limit in above example is equivalent to:

```
->pipe(new Limit(
    array(2)
))
```