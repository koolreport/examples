`koolreport/visualquery` is package to build query using UI.

```
//MyReport.php
class Report extends \koolreport\KoolReport
{
    use \koolreport\visualquery\Bindable;
    ...
```

```
//MyReport.view.php
<?php
    \koolreport\visualquery\VisualQuery::create(array(
        "name" => "visualquery1",
        ...
```
