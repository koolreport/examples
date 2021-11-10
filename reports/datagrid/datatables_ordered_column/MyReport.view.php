<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        This example show how to build a fixed order column despite sorting, filtering.
        </p>
    </div>
    
    <?php
    DataTables::create(array(
        "name" => "OrderedTable",
        "dataSource"=>$this->dataStore("employees"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        ),
        "columns" => array(
            "indexColumn" => ["label" => "Row", "formatValue" => function($value, $row) { return ""; }],
            "employeeNumber", "firstName", "lastName", "jobTitle", "extension"
        ),
        "options" => array(
            "paging" => true,
            "searching" => true,
        ),
        "onReady" => "function() {
            OrderedTable.on( 'order.dt search.dt', function () {
                OrderedTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        }",
    ));
    ?>
</div>