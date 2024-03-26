This example demonstrates how to export table with column width and row height to an excel file.

```
<div>
    <?php
        \koolreport\excel\Table::create(array(
            ...
            'columns' => [
                'productName' => [
                    'label' => 'Info-Product-Name',
                    'width' => 60, // overrides outside "columnWidth" property
                ],
                ...
            ],
            // 'rowHeight' => '50',
            'rowHeight' => function($row, $rowIndex) {
                // return 'auto';
                return 10 * ($rowIndex + 1);
            },
            // 'columnWidth' => '30',
            'columnWidth' => function($columnName, $columnIndex) {
                if ($columnName === 'dollar_sales') return '10';
                else return 'auto';
            },
            // 'columnAutoSize' => false,
        ));
    ?>
</div>
```