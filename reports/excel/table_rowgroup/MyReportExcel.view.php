<?php
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
        \koolreport\excel\Table::create(array(
            "dataSource" => $this->dataStore('sales'),
            "columns" => ["productName", "dollar_sales"],
            "rowGroup" => [
                "customerName" => [
                    'direction' => 'asc',
                    'calculate' => [
                        'totalSales' => [
                            'sum', 
                            'dollar_sales',
                            'format' => [
                                "type" => "number",
                                "decimals" => 0,
                                "decimalPoint" => ".",
                                "thousandSeparator" => ",",
                            ]
                        ]
                    ],
                    "top" => "Customers: {customerName}",
                    "columnTops" => [
                        // "productName" => "Customers: {customerName}",
                        // "dollar_sales" => "Total sales: {totalSales}"
                    ],
                    // "bottom" => "Customers: {customerName}",
                    // "columnBottoms" => [
                        // "dollar_sales" => "Total sales: {totalSales}"
                    // ],
                ],
                "productLine" => [
                    'direction' => 'asc',
                    'calculate' => [
                        'totalLineSales' => [
                            'sum', 
                            'dollar_sales',
                            'format' => [
                                "type" => "number",
                                "decimals" => 0,
                                "decimalPoint" => ".",
                                "thousandSeparator" => ",",
                            ]
                        ]
                    ],
                    "top" => "Product line: {productLine}",
                    "columnTops" => [
                        // "productName" => "Product line: {productLine}",
                        "dollar_sales" => "Total sales: {totalLineSales}"
                    ],
                ]
            ]
        ));
        ?>
    </div>
    
</div>