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
            "dataSource" => $this->dataStore('orders'),
            "columns"=>array(
                "productName",
                "orderYear" => ["label" => "Date-Year"],
                "orderMonth" => ["label" => "Date-Month"],
                "orderDay" => ["label" => "Date-Day"],
                "dollar_sales"=>array(
                    "type"=>"number",
                    "decimals" => 2,
                )
            ),
            "complexHeaderLabels" => true,
            "sorting" => [
                "dollar_sales" => "desc",
            ]
        ));
        ?>
    </div>
    
</div>