This example demonstrates how to perform AJAX loading with SubReport. Sub Report is actually a full functional report and it is defined a sub report within a main one.

In this example, The `CustomerOrders` is the main report and it includes `CutomerSelecing` and `ListOrders` as its two subreports. If you have a big report, we can break this report into smaller easy-to-handle sub reports. In this way, you can manage reports easier.

The most powerful features of sub report is its ability to load on-demand via ajax request. So let imagine your have a big report combined from small sub reports, you can load those sub reports dynamically. In above example, the `CustomerSelecting` helps to select customers and `ListOrders` will display orders of selected customers. All are without page refreshing.

The SubReport is a built-in feature of KoolReport.