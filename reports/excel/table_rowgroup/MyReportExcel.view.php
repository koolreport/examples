<?php
    use \koolreport\excel\Table;

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
            "dataSource" => $this->dataStore('sales'),
            "columns" => ["productName", "dollar_sales"],
            "rowGroup" => [
                "customerName" => [
                    'direction' => 'desc',
                    'calculate' => [
                        'totalSales' => ['sum', 'dollar_sales']
                    ],
                    "top" => "Customers: {customerName}",
                    "columnTops" => [
                        "dollar_sales" => "Total sales: {totalSales}"
                    ],
                    "bottom" => "Customers: {customerName}",
                    "columnBottoms" => [
                        "dollar_sales" => "Total sales: {totalSales}"
                    ],
                ],
                "productLine" => [
                    "top" => "Product line: {productLine}",
                ]
            ]
        ));
        ?>
    </div>
    
</div>