<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to group similar column cells with rowspan
        </p>
    </div>
    <style>
        tr[role="row"] td:first-child {
            padding-left: 50px;
        }
    </style>
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("sales"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        ),
        "columns" => ["customerName", "productLine", "productName", "dollar_sales"],
        "rowspan" => [0, 1],
        "options" => [
            "paging" => true,
            "searching" => true,
            "pageLength" => 25,
        ],
    ));
    ?>
</div>