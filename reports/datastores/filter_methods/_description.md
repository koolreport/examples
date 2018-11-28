This example shows some of most used methods for filtering in `DataStore`.

Beside above most used methods, there are number of additional methods:


1. `all()`: Return all rows
2. `top($size,$offset)`: Get the top {$size} rows starting from {$offset}
3. `topByPercent($percent)`: Get top percent of rows
4. `bottom($size)`: Get the bottom {$size} rows
5. `bottomByPercent($percent)`: Get bottom percent of rows
6. `first($callback)`: Return the first row matching condition defined by callback function
7. `last($callback)`: Return the last row matching condition defined by callback function
8. `take($limit)`: Get number of rows, if $limit is negative, take the bottom