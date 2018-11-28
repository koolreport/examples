Inputs package is very important if you want to build a dynamic reports or dashboards. The dynamic reports or dashboards can recieve parameters and generate outcome base on the parameters. For example, we can select a date range and the sale report will show status of sale within that timeframe.

By default, report created by KoolRepot can receive parameters however you may need to build your own form to get those parameters from users and put into report. The `Inputs` package can ease your tasks by connecting directly to the report to provided parameters for report.

The `Inputs` package contains the most used inputs such as DateTimePicker, DateRangePicker, MultiSelect widgets ready for you to insert into your report.

__TextBox__

```
<?php TextBox::create(array(
    "name"=>"textBox",
    "attributes"=>array(
        "class"=>"form-control",
        "placeholder"=>"Enter any text"
    )
));?>
```

__RadioList__

```
<?php RadioList::create(array(
    "name"=>"radioList",
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName"
));?>
```

__DateTimePicker__

```
<?php DateTimePicker::create(array(
    "name"=>"startDatePicker",
    "maxDate"=>"@endDatePicker",
    "format"=>"MM/DD/YYYY HH:mm"
));?>    

<?php DateTimePicker::create(array(
    "name"=>"endDatePicker",
    "minDate"=>"@startDatePicker",
    "format"=>"MM/DD/YYYY HH:mm"
));?>
```

__RangeSlider__

```
<?php
RangeSlider::create(array(
    "name"=>"rangeSliderTwo",
    "handles"=>2,
    "ranges"=>array(
        "min"=>0,
        "max"=>100,
    ),
    "step"=>10,
    "scale"=>5,
));
?>
```

__BSelect__

```
<php
BSelect::create(array(
    "name"=>"multipleBSelect",
    "multiple"=>true,
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName",
));
?>
```

__DateRangePicker__

```
<?php DateRangePicker::create(array(
    "name"=>"dateRange",
));?>
```

__CheckBoxList__

```
<?php CheckBoxList::create(array(
    "name"=>"checkBoxList",
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName"
));?>
```

__Select__

```
<?php Select::create(array(
    "name"=>"select",
    "dataStore"=>$this->dataStore("customers"),
    "defaultOption"=>array("--"=>""),
    "dataBind"=>"customerName",
    "attributes"=>array(
        "class"=>"form-control",
    )
));?>
```

__MultiSelect__

```
<?php MultiSelect::create(array(
    "name"=>"multiSelect",
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName",
    "attributes"=>array(
        "class"=>"form-control",
        "size"=>5
    )
));?> 
```

__Select2__

```
<?php
Select2::create(array(
    "name"=>"multipleSelect2",
    "multiple"=>true,
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName",
    "attributes"=>array(
        "class"=>"form-control",
    )
));
?>
```

More information of Inputs package you may find [here](https://www.koolreport.com/packages/inputs).