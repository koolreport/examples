This example show how to customize the row header and column header of Pivot Table and PivotMatrix widget.

Under the `"map"` property, you add `"rowHeader"` and `"columnHeader"` sub properties. Those properties are defined by a function that will receive row or column header text as parameters. You can add custom processes to transform the row and column headers to desired one and return it.

As you can see in above example, the row and column header of pivot are prefixed with order: `"AV Stores, Co."` becomes `"1. AV Stores, Co."`.