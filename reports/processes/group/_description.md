The example demonstrates usage of `Group` process. The group process is used to group row of data and do aggregation calculation. 

__Other methods__

Beside `"sum"` aggregation, the group process also support other methods: `"avg"`,`"min"`, `"max"`, `"min"`, `"first"`, `"last"`.

For example:

```
->pipe(new Group(array(
    "by"=>"item",
    "avg"=>"cost"
)))
```


__By list of fields__

The Group process can group not only by a field but also by multiple fields:

```
->pipe(new Group(array(
    "by"=>array("category","line")
    "sum"=>"amount"
)))
```
