<?php
    $sheet1 = "Sales by Customer";
?>
<div sheet-name="<?php echo $sheet1; ?>">
    <div>Orders Table</div>

    <div>
        <?php
        \koolreport\excel\Table::create(array(
            "dataSource" => $this->dataStore('orders'),
            'columns' => [
                'productName' => [
                    'label' => 'Info-Product-Name',
                    'width' => 60, // overrides outside "columnWidth" property
                ],
                'dollar_sales' => [
                    'footerText' => "Total value: \n @value",
                ],
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
    
</div>