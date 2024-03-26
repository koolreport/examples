<?php
    use \koolreport\excel\Table;
    use \koolreport\excel\PivotTable;
    use \koolreport\excel\BarChart;
    use \koolreport\excel\LineChart;

    $sheet1 = "Sales by Customer";
?>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="Excel,HTML,CSS,XML,JavaScript">
<meta name="creator" content="John Doe">
<meta name="subject" content="subject1">
<meta name="title" content="title1">
<meta name="category" content="category1">

<div sheet-name="<?php echo $sheet1; ?>">
    <div>Orders Table</div>

    <div>
        <?php
        Table::create(array(
            "dataSource" => $this->dataStore('salesQuarterProduct'),
            // "dataSource" => 'orders',
            'columns' => [
                'productName' => [
                    'label' => 'Info-Product-Name',
                    'width' => 60, // overrides outside "columnWidth" property
                ],
                'Q1', 'Q2', 'Q3', 'Q4',
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
            ],
            'rowHeight' => '50',
            // 'rowHeight' => function($row, $rowIndex) {
            //     // return 'auto';
            //     return 10 * ($rowIndex + 1);
            // },
            // 'columnWidth' => '50',
            'columnWidth' => function($columnName, $columnIndex) {
                if ($columnName === 'Chart') return '30';
                else return 'auto';
            },
            // 'columnAutoSize' => false,
        ));
        ?>
    </div>
    
</div>