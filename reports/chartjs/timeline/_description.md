This example shows how to build a `Timeline` chart with 4 columns for each data row.

For example:

```
    \koolreport\chartjs\Timeline::create(array(
        "dataSource" => $this->dataStore("timelineData"),
        "columns" => [
            "timelineLabel", "start", "end", "itemLabel",
        ],
```