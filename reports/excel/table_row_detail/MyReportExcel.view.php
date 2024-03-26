<?php
    $sheet1 = "Sales by Customer";
?>
<div sheet-name="<?php echo $sheet1; ?>">
    <div>Orders Table</div>

    <div>
        <?php
        \koolreport\excel\Table::create(array(
            "dataSource" => $this->dataStore('sales'),
            "columns" => [
                "customerName", "productLine", 
                // "productName", "dollar_sales"
            ],
            "rowDetailTable" => function($row) {
                return [
                    [
                        "",
                        "",
                        [
                            "cellValue" => $row["productName"] . " : " . $row["dollar_sales"],
                            "rowspan" => 3,
                            "colspan" => 2,
                        ],
                    ],
                ];
            }
        ));
        ?>
    </div>
    
</div>