This example show you how to customize the field name so that Pivot displaying a nicer column, row or data headers to your users.

Under the `"map"` properties, you defined a custom function for `"dataField"`. The function will receive name of datafield. Base on that name, you may return a new name for it. For example: `"dollar_sales - sum"` will be transformed to `"Sales (in USD)"`.