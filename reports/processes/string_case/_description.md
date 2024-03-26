StringCase is a process to convert string values to various case types such as "upper", "lower", "first-cap", "all-cap".

"upper" means all upper case strings. "lower" means all lower case string. "first-cap" means the first word with its first letter in upper case. "all-cap" means all words with their first letter in upper case.


__Sample code__

```
->pipe(new StringCase(array(
    "all-cap" => "name",
    // "upper" => "name, address",
    // "lower" => "name, address",
    // "first-cap" => "name, address",
    // "all-cap" => "name, address"
)))
```
