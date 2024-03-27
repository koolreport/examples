This example demonstrates how to export table to an excel file.

```
<?php
    \koolreport\excel\Table::create(array(
        ...
        'columns' => [
            ...
            'Chart' => [
                'formatValue' => function($value, $row, $ckey, $meta) {
                    return \koolreport\excel\PieChart::create([
                        "dataSource" => [
                            ["Quarter", "Sales"],
                            ["Q1", $row['Q1']],
                            ["Q2", $row['Q2']],
                            ["Q3", $row['Q3']],
                            ["Q4", $row['Q4']]
                        ],
                        "columns" =>[
                            'Quarter', "Sales"
                        ],
                    ], true);
                },
            ],
        ]
    ));
?>
```