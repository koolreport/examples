The example demonstrate how to build a dynamic reports with multiple data filters. In this example, the data selection can be filter by `year`, `productLine` and `customerName`. Those data filters can be multi-selected meaning that you can select more than 1 years, more than 1 product lines or more than 1 customer to view.

The example use `Select2` from [inputs package](https://www.koolreport.com/packages/inputs) to construct the parameters selection.

We use the [Row Group] feature of Table for better data visualization. This grouping features support unlimited levels of grouping. There is very limited data table in market supporting this features. This feature is totally free with KoolReport.

__Code Explanation__:

The report use `\koolreport\inputs\Bindable` and `\koolreport\inputs\POSTBinding` services which will allows data binding between the report parameters and inputs controls. So the selection from select2 controls like years,productLines and customerNames will be bound to the corresponding report params.

We use the `defaultParamValues()` methods in the report to define default starting selection of users. As you can see from the code, we pre-select the year `2003`. You may add different year, or set preselected for customerNames or productLines

We use the `bindParamsToInputs()` to bind the name of report parameters to the name of the input controls. To keep things simple, the report parameters and name of input controls are the same:

```
    protected function bindParamsToInputs()
    {
        return array(
            "years",
            "customerNames",
            "productLines"
        );
    }
```

It is equivalent to

```
    protected function bindParamsToInputs()
    {
        return array(
            "years"=>"years",
            "customerNames"=>"customerNames",
            "productLines"=>"productLines"
        );
    }
```

In `setup()` function, base on the selection of users we add custom condition to the SQL query. Below code means that do not add the year condition if user does not select year.

```
    ".(($this->params["years"]!=array())?"and YEAR(orderDate) in (:years)":"")."
```

And also, we have this line of code:

```
    $query_params = array();
    if($this->params["years"]!=array())
    {
        $query_params[":years"] = $this->params["years"];
    }
```

meaning that if user select year, then we add the year to variable `$query_params` to be used as parameters for sql query.

In the view, we have some advance code for `Select2` widget:

```
    <?php 
    Select2::create(array(
        "multiple"=>true,
        "name"=>"years",
        "dataSource"=>$this->src("automaker")->query("
            select YEAR(orderDate) as year
            from orders
            group by year
        "),
        "attributes"=>array(
            "class"=>"form-control"
        )
    ));
    ?>
```

As you may notice, in `"dataSource"` of Select2 we use directly SQL command to query the available year.

So as user selects years, productLines and customerNames, we will execute and store result to `"orders"` dataStore later be visualized in `Table`.

__Enjoy the example!__