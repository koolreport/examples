<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to use client-side fast rendering for nearly 30 000 rows
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
        "fastRender" => true,
        "options" => [
            "paging" => true,
            "pageLength" => 10,
            "order" => []
        ],
    ));
    ?>
</div>