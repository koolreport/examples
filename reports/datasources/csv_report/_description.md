This report show you how to load data from CSV, perform data aggregation and produce nice charts and tables.

As you may see, KoolReport will automatically load your data from CSV and pipe them through `TimeBucket` process then `Group` process to group data by month. The TimeBucket is a special process to separate time data into bucket like week, month or year. The data after piping through all processed will be stored in `"sales_by_month"` data store ready to visualize by the view.

In the report view, we use `ColumnChart` to visualize and `Table` to display data in details.