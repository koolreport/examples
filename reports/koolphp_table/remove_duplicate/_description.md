You may remove the duplicate in a column. Normally this feature is used with sorted table. The duplicate values in a column will be remove if they are placed adjacently. This `"removeDuplicate"` property receives an array of columns which you want to remove duplicate.

```
<?php
Table::create(array(
    ...
    "removeDuplicate"=>array("productLine")
));
?>
```