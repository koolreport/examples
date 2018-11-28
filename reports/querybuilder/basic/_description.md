This example shows you to get started with `QueryBuilder` to generate error-free SQL using fluent PHP language. Please dont limit the usage of QueryBuilder inside KoolReport, QueryBuilder can be used standalone in any of your PHP application to generate SQL Query.

```
<?php

echo DB::table("employees")
    ->select('employeeNumber','firstName','lastName','jobTitle');
```

It will print

```
SELECT `employeeNumber`,`firstName`,`lastName`,`jobTitle` from employees
```

