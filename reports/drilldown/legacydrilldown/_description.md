Drill down is another most used type of report in which data is summarized in a overall level and only going to detail when needed. For example in above example, we summarize sale data by year. By clicking into column of particular year, report will load detail summary sale data of that year in month. it is pretty straight-forward.

The `LegacyDrillDown` widget is designed for you to easily setup a drill down. You need to define a common SQL statement to pull the whole data. In each level of drilldown, you defined which column should be grouped and which widgetw will be used to visualize data. In above example, the first level will use `year` as group column and `ColumnChart` as visualization widget. In the second level, we use the `month` as group column. The second level will also take into account the year selection in the first level.

For your information, the `LegacyDrillDown` is the former `DrillDown`. The new `DrillDown` widget has different settings.


More information of DrillDown package you may find in [here](https://www.koolreport.com/packages/drilldown).