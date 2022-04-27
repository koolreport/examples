When there are a lot of rows it's faster for PivotMatrix to use server paging to reduce rendering time:

```
<?php
PivotMatrix::create(array(
    ...
    "serverPaging" => true,
    ...
));
```