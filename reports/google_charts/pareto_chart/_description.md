This example shows how we can make Pareto Chart.

The Pareto Chart has this definition: _"A Pareto chart, named after Vilfredo Pareto, is a type of chart that contains both __bars__ and a __line__ graph, where individual values are represented in __descending order by bars__, and the cumulative total is represented by the line. ... The Pareto chart is one of the seven basic tools of quality control."_

So in this example, we use `CSVDataSource` to read data from `data.csv` contaning _category_ and _sale_ column. We use the `ComboChart` to create chart with both bar and line type. 

The data come from the source will be sorted with `Sort` process and then we create `running_sale` column with `AccumulativeColumn` process

```
$this->src('data')
->pipe(new Sort(array(
    "sale"=>"desc"
)))
->pipe(new AccumulativeColumn(array(
    "running_sale"=>"sale"
)))
```

_Note_: In this example, the data do not share among different widgets so we use `src()` and processes directly in the chart. This is also a feature of KoolReport's widget which can receive data directly from `DataSource` or `Process`.

In the _running_sale_ we use `line` as chartType. Also in the `"options"` we define 2 axes and matching them with series.

```
"options"=>array(
    "vAxes"=>array(
        array("label"=>"Sale"),
        array("label"=>"Running Sale"),  
    ),
    "series"=>array(
        0=>array("targetAxisIndex"=>0), //"amount series"
        1=>array("targetAxisIndex"=>1), //"running_total"
    )
)
```

Enjoy the example!