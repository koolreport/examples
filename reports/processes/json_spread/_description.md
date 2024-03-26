JsonSpread helps to decode json string column and then spread its values into multiple columns. This process is very useful when you want to make calculation bases on the value inside json string.

__Spread all values from a json column__

```
->pipe(new JsonSpread(array(
    "nameIncomeJson"
)))
```

__Spread certain values from a json column__

```
->pipe(new JsonSpread(array(
    "nameIncomeJson" => array("name", "income")
)))
```
