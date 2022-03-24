<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables' Server-side Footers</h1>
        <p class="lead">
            By default, DataTables' footer can work with server-side processing
        </p>
    </div>

    <?php
    DataTables::create(array(
        'name' => 'DataTable1',
        'dataSource' => function() {
            return $this->src("automaker")
            ->query("select * from customer_product_dollarsales2 limit 500");
        },
        'scope' => $this->params,
        "options" => array(
            "searching" => true,
            "paging" => true,
            "colReorder" => true,
            "order" => [],
            "ordering" => true,
            "pageLength" => 10,
        ),
        "columns" => [
            "customerName" => [],
            "dollar_sales" => [
                "prefix" => "$",
                "footer" => "sum",
                "aggregates" => [
                    "totalCount" => ["count", "customerName"],                    
                    "avgSale" => ["avg", "dollar_sales"],
                ],
                "footerText" => "Sum: @value | Avg: @avgSale | Count: @totalCount",
            ],
        ],
        "showFooter"=>true,
        "themeBase"=>"bs4",
        // "fastRender" => true,
        "serverSide"=>true,
        "method"=>'post', //default method = 'get'
        // "searchOnEnter" => true,
        "serverSideInstantSearch" => true,
        "searchMode" => "or"
    ));
    ?>
</div>