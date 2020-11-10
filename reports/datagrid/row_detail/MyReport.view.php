<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to use row detail with DataTables
        </p>
    </div>
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("sales"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "columns" => [
            "customerName", "productLine", "productName", "dollar_sales",
            "orderDate" => [
                "visible" => false,
            ]
        ],
        "rowDetailData" => function($row) {
            return "Server-built row detail: " . $row['orderDate'];
        },
        // "rowDetailData" => "function(row) {
        //     return 'Client-built row detail: ' + row.orderDate;
        // }",
        // "rowDetailIcon" => false,
        // "rowDetailSelector" => 'td.col-customer-name',
        "options" => [
            "paging" => true,
            "searching" => true,
            "pageLength" => 10,
        ],
    ));
    ?>
</div>