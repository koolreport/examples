The report shows how to compute custom dimensional (row, column, etc) values:

```
        ->pipe(new Pivot(array(
            "dimensions"=>array(
                "column"=>[
                    "orderYear" => [
                        "computations" => [
                            "yearlyDifference" => "{2004} - {2003}",
                            "yearlyDifference" => function($aggRow, $measure) {
                                return ($aggRow['2004'] ?? 0) - ($aggRow['2003'] ?? 0);
                            },
                        ],
                    ],
                    "orderMonth" => [
                        "computations" => [
                            "halfYearDifference" => "{12} + {11} + {10} + {9} + {8} + {7} - {1} - {2} - {3} - {4} - {5} - {6}",
                            "halfYearDifference" => function($aggRow, $measure) {
                                $result = 0;
                                $firstHalf = [1, 2, 3, 4, 5, 6];
                                $secondHalf = [7, 8, 9, 10, 11, 12];
                                foreach ($firstHalf as $month) $result -= $aggRow[$month] ?? 0;
                                foreach ($secondHalf as $month) $result += $aggRow[$month] ?? 0;
                                return $result;
                            }
                        ]
                    ],
                ],
                "row"=>"customerName, productLine",
            ),
            "aggregates"=>array(
                "sum"=>"dollar_sales",
            ),
        )))
```