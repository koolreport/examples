This examples show how to count distinct a field when row grouping.

```
<?php 
DataTables::create(array(
    ...
    "clientRowGroup" => [
        "customerName" => [
            'direction' => 'asc',
            'calculate' => [
                'countDistinctLine' => [
                    'field' => 'productLine',
                    "aggregate" => "function(rows, group, aggFieldIndex) {
                        var initAgg = {
                            values: {},
                            count: 0
                        };
                        return rows
                        .data()
                        .pluck(aggFieldIndex)
                        .reduce( function (agg, b) {
                            if (agg.values[b] !== true) {
                                agg.count += 1;
                                agg.values[b] = true;
                            } 
                            return agg;
                        }, initAgg)}",
                    "format" => "function(agg) {return agg.count;}",
                ],
            ],
            "top" => "<td colspan='999'>{expandCollapseIcon} Customer: \${customerName} | Count distinct categories: {countDistinctLine}</td>",
        ],
    ],
));
?>
```