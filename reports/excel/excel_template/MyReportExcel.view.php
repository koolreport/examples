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
    <?php
    $styleArray = [
        'font' => [
            'name' => 'Calibri', //'Verdana', 'Arial'
            'size' => 30,
            'bold' => false,
            'italic' => FALSE,
            'underline' => 'none', //'double', 'doubleAccounting', 'single', 'singleAccounting'
            'strikethrough' => FALSE,
            'superscript' => false,
            'subscript' => false,
            'color' => [
                'rgb' => '000000',
                'argb' => 'FF000000',
            ]
        ],
        'alignment' => [
            'horizontal' => 'general',//left, right, center, centerContinuous, justify, fill, distributed
            'vertical' => 'bottom',//top, center, justify, distributed
            'textRotation' => 0,
            'wrapText' => false,
            'shrinkToFit' => false,
            'indent' => 0,
            'readOrder' => 0,
        ],
        'borders' => [
            'top' => [
                'borderStyle' => 'none', //dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                'color' => [
                    'rgb' => '808080',
                    'argb' => 'FF808080',
                ]
            ],
            //left, right, bottom, diagonal, allBorders, outline, inside, vertical, horizontal
        ],
        'fill' => [
            'fillType' => 'none', //'solid', 'linear', 'path', 'darkDown', 'darkGray', 'darkGrid', 'darkHorizontal', 'darkTrellis', 'darkUp', 'darkVertical', 'gray0625', 'gray125', 'lightDown', 'lightGray', 'lightGrid', 'lightHorizontal', 'lightTrellis', 'lightUp', 'lightVertical', 'mediumGray'
            'rotation' => 90,
            'color' => [
                'rgb' => 'A0A0A0',
                'argb' => 'FFA0A0A0',
            ],
            'startColor' => [
                'rgb' => 'A0A0A0',
                'argb' => 'FFA0A0A0',
            ],
            'endColor' => [
                'argb' => 'FFFFFF',
                'argb' => 'FFFFFFFF',
            ],
        ],
    ];
    ?>
    <div cell="A1" range="A1:H1" excelstyle='<?php echo json_encode($styleArray); ?>' >
        Sales Report
    </div>

    <div>Orders</div>

    <div>
        <?php
        Table::create(array(
            "dataSource" => $this->dataStore('orders'),
        ));
        ?>
    </div>

    <?php
        $datastores = ['salesQuarterCustomer', 'salesQuarterProduct'];
        foreach ($datastores as $datastore) { 
            if ($datastore === 'salesQuarterCustomer') {
                $title = 'Sales by Customer';
                $name = 'customerSales';
                $column = 'customerName';
            } else {
                $title = 'Sales by Product';
                $name = 'productSales';
                $column = 'productName';
            }
            ?>
            <div>
                <?php echo $title; ?>
            </div>
            <div>
                <?php
                Table::create(array(
                    "name" => $name,
                    // "dataSource" => $this->dataStore($datastore),
                    "dataSource" => $datastore,
                    "columns" =>[
                        $column, "Q1", "Q2", "Q3", "Q4"
                    ],
                ));
                ?>
            </div>
        <?php }
    ?>

    <div>
        <?php
        PivotTable::create(array(
            "dataSource" => 'salesPivot',
        ));
        ?>
    </div>
    
    <div range="A25:H45">
        <?php
        BarChart::create(array(
            // "dataSource" => 'salesQuarterCustomer',
            // "columns" =>[
            //     'customerName', "Q1", "Q2", "Q3", "Q4"
            // ],
            'excelDataSource' => 'customerSales', //table_0, table_1
            'title' => 'Customer Sales by Quarter',
            'xAxisTitle' => 'Customers',
            'yAxisTitle' => 'Sales($)',
            // 'stacked' => true,
            'direction' => 'horizontal',
        ));
        ?>
    </div>
    
</div>

<div>
    <div>
        <?php
        PivotTable::create(array(
            "dataSource" => 'salesPivot',
        ));
        ?>
    </div>
    <div>
        <?php
        PivotTable::create(array(
            "dataSource" => 'salesPivot',
        ));
        ?>
    </div>
</div>

<div sheet-name="Sale By Quarter">
    <div>
        <?php
        LineChart::create(array(
            "dataSource" => $this->dataStore('salesQuarterProduct'),
            "columns" =>[
                'productName', "Q1", "Q2", "Q3", "Q4"
            ]
        ));
        ?>
    </div>
</div>