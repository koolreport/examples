<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to expand row details
        </p>
    </div>
    <?php
    DataTables::create(array(
        "name" => "rowDetailTable",
        "dataSource"=>$this->dataStore("sales"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "plugins" => [ "Buttons" ],
        "columns" => [
            "customerName", "productLine", "productName", "dollar_sales",
            "orderDate" => [
                "visible" => false,
            ]
        ],
        "rowDetailData" => function($row) {
            return "Server-built row detail: " . $row['orderDate'];
        },
        "options" => [
            "paging" => true,
            "searching" => true,
            "pageLength" => 10,
            "dom" => "<'row mb-2'<'col-12 text-right'B>>" . "<'row'<'col-sm-6'l><'col-sm-6'f>>" 
                . "<'row'<'col-sm-12'tr>>" . "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            "buttons" => [
                [
                    "text" => 'Toggle details',
                    "action" => "function() { KRrowDetailTable.toggleAllRowDetails(); }",
                ],
                [
                    "text" => 'Expand details',
                    "action" => "function() { KRrowDetailTable.expandAllRowDetails(); }",
                ],
                [
                    "text" => 'Collapse details',
                    "action" => "function() { KRrowDetailTable.collapseAllRowDetails(); }",
                ],
            ],
        ],
        "onReady" => "function() {
            rowDetailTable.on( 'draw', function () {
                KRrowDetailTable.expandAllRowDetails();
            } );
            KRrowDetailTable.expandAllRowDetails();
        }",
    ));
    ?>
</div>