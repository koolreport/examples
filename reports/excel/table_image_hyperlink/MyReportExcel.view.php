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
                    'label' => "Sales",
                ],
                'image' => [
                    'formatValue' => function($value, $row, $ckey, $meta) {
                        return \koolreport\excel\Image::create([
                            'path' => '../../../assets/images/bar.png',

                            // use offsetX, offsetY as margin
                            'offsetX' => 5, // default: 0
                            'offsetX2' => -5, // default: 0
                            'offsetY' => 5, // default: 0
                            'offsetY2' => -5, // default: 0
                            
                            // 'name' => 'name', // default: ''
                            // 'description' => 'description', // default: ''
                            // 'roration' => 0, // default: 0
                            // 'hyperlink' => null, //Hyperlink object, default: null
                            // 'shadow' => null, //Shadown object, default: null
                            'shadowVisible' => true, // default: false
                            'shadowDirection' => 45, // default: 0
                        ], true);
                    }
                ],
                'url' => [
                    'formatValue' => function ($value, $row, $ckey, $meta) {
                        return \koolreport\excel\Hyperlink::create([
                            'url' => 'https://www.example.com',
                            'text' => 'Example site'
                        ], true);
                    },
                ]
            ],
            // 'rowHeight' => '50',
            'rowHeight' => function($row, $rowIndex) {
                // return 'auto';
                return 10 * ($rowIndex + 1);
            },
            // 'columnWidth' => '30',
            'columnWidth' => function($columnName, $columnIndex) {
                if ($columnName === 'image') return '10';
                else return 'auto';
            },
            // 'columnAutoSize' => false,
        ));
        ?>
    </div>
    
</div>