This example demonstrates how to export text to an excel file.

```
    <div cell="A1" range="A1:H1" excelStyle='<?php echo json_encode($styleArray); ?>' >
        Sales Report
    </div>

    <div range="A2:H2">
        <?php
        \koolreport\Excel\Text::create(array(
            "text" => 'Sales Report',
            "excelStyle" => $styleArray
        ));
        ?>
    </div>
```