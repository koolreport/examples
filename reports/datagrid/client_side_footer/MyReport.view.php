<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables' Client-side Footers</h1>
        <p class="lead">
            Various client-side footers for current page, searched pages, all pages
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
            "footerCallback" => "function ( row, data, start, end, display ) {
                // console.log(row, data, start, end, display);
                var api = this.api(), data;

                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };

                // Total over all searched pages
                var searchedTotal = api
                    .column( 1 , { 'search': 'applied' })
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
    
                // Total over this page
                var pageTotal = api
                    .column( 1, { page: 'current'} )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
    
                // Update footer
                console.log('pageTotal = ', pageTotal);
                $( api.column( 1 ).footer().querySelector('.footer-callback-page') ).html(
                    '$' + pageTotal.toLocaleString()
                );
                $( api.column( 1 ).footer().querySelector('.footer-callback-search-page') ).html(
                    '$' + searchedTotal.toLocaleString()
                );
            }"
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
                "footerText" => "
                    Current page: <span class='footer-callback-page'></span>
                    <br>
                    Searched pages: <span class='footer-callback-search-page'></span>
                    <br>
                    All pages: @value 
                    <br>
                    Avg: @avgSale | Count: @totalCount",
            ],
        ],
        "showFooter"=>true,
        "themeBase"=>"bs4",
        "fastRender" => true,
        "searchMode" => "or"
    ));
    ?>
</div>