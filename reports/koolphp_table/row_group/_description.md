__Row Grouping__ is a new feature of KoolReport's Table widget. In this example, we have query data including `month` and `amount` in which amount is the sale of particular month.

Now we would like to group those months into it particular year, calculate the total sale of that years. Furthermore, at the end of table we would like to have the Grand Total amount.

The Grand Total amount is easy as we can use the `"footer"` feature of Table.

In order to group by year and calculate sum of each year we do this:

```
<?php
Table::create(array(
    ...
    "grouping"=>array(
        "year"=>array(
            "calculate"=>array(
                "{sumAmount}"=>array("sum","amount")
            ),
            "top"=>"<b>Year {year}</b>",
            "bottom"=>"<td><b>Total of year {year}</b></td><td><b>{sumAmount}</b></td>"
        ),
    ),
))
```

We define `grouping` by `year` followed by settings: please calcuate `{sumAmount}` by sum the amount of the year. Then fill the `{sumAmount}` to the `"start"` template and `"end"` template.

The `"top"` template defines what will show at beginning of the group while `"bottom"` define what to show at the end of the group. So we want to show the year on top and total year at the bottom.

__Note:__ In above example, we show single level of grouping (by year) only. The `Table` can support __multilevel grouping__ in which you can define another group as a sub group. For example:

```
Table::create(array(
    "grouping"=>array(
        "country"=>array(...),
        "city"=>array(...)
    )
))
```