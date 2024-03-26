The example demonstrates usage of `Sort` process. The sort process is used to sort data according to a comparative function.

__Sort using comparative function__

```
"income"=>function($a, $b) {
    if ($a < $b) return 1;
    else if ($a === $b) return 0;
    else if ($a > $b) return -1;                
}
```