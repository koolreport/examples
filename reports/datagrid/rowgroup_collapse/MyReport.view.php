<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to use collapse/expand row groups
        </p>
    </div>
    <style>
        tr[role="row"] td:first-child {
            padding-left: 50px;
        }
    </style>
    <?php
    DataTables::create(array(
        "name" => "MyTable1",
        "dataSource"=>$this->dataStore("sales"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        ),
        "plugins" => [ "Buttons" ],
        "columns" => ["customerName", "productLine", "productName", "dollar_sales"],
        "clientRowGroup" => [
            "customerName" => [
                'direction' => 'asc',
                "top" => "<td colspan='999'>{expandCollapseIcon} Customer: {customerName}</td>",
            ],
            "productLine" => [
                'direction' => 'asc',
                "top" => "<td colspan='999'>{expandCollapseIcon} Category: {productLine}</td>",
            ],
        ],
        "options" => [
            // "fastRender" => true,
            "paging" => true,
            "searching" => true,
            "pageLength" => 25,
            // "dom" => 'Blftip',
            "dom" => "<'row mb-2'<'col-12 text-right'B>>" . "<'row'<'col-sm-6'l><'col-sm-6'f>>" 
                . "<'row'<'col-sm-12'tr>>" . "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            "buttons" => [
                [
                    "text" => 'Collapse Customers',
                    "action" => "function() { KRMyTable1.collapseAllGroups(0); }",
                ],
                [
                    "text" => 'Collapse Categories',
                    "action" => "function() { KRMyTable1.collapseAllGroups(1); }",
                ],
                [
                    "text" => 'Expand Customers',
                    "action" => "function() { KRMyTable1.expandAllGroups(0); }",
                ],
                [
                    "text" => 'Expand Categories',
                    "action" => "function() { KRMyTable1.expandAllGroups(1); }",
                ],
                
                [
                    "text" => 'Toggle Customers',
                    "action" => "function() { KRMyTable1.toggleAllGroups(0); }",
                ],
                [
                    "text" => 'Toggle Categories',
                    "action" => "function() { KRMyTable1.toggleAllGroups(1); }",
                ],
            ],
        ],
        "onReady" => "function() {
            MyTable1.on( 'draw.dt', function () {
                console.log( 'event draw' );
                KRMyTable1.collapseAllGroups(0);
                KRMyTable1.collapseAllGroups(1);
            } );
            KRMyTable1.collapseAllGroups(0);
            KRMyTable1.collapseAllGroups(1);
        }",
    ));
    ?>
</div>