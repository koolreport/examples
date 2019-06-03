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

    <div>
        <?php
        Table::create(array(
            'name' => 'customerSales',
            "dataSource" => 'salesQuarterCustomer',
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

    <div>
        <?php
        LineChart::create(array(
            "dataSource" => 'salesQuarterProduct',
            "columns" =>[
                'productName', "Q1", "Q2", "Q3", "Q4"
            ]
        ));
        ?>
    </div>
    
</div>
