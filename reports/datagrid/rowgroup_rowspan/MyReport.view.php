<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to use both row group and row span with DataTables
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
            "table"=>"table table-bordered"
        ),
        "columns" => ["customerName", "productLine", "productName", "dollar_sales"],
        "clientRowGroup" => [
            "customerName" => [
                'direction' => 'asc',
                'calculate' => [
                    'totalSales' => [
                        'sum',  //'sum', 'count', 'avg', 'min', 'max' 
                        'dollar_sales'
                    ],
                ],
                "top" => "<td colspan='999'>{expandCollapseIcon} Top: Customer: {customerName} | Total: {totalSales}</td>",
                "bottom" => "<td colspan='999'>{expandCollapseIcon} Bottom: Customer: {customerName} | Customer sales: {totalSales}</td>",
            ],
            "productLine" => [
                'direction' => 'desc',
                'calculate' => [
                    'totalSales' => ['sum', 'dollar_sales',
                        "format" => "function(value) {return value.toFixed(3);}",
                    ],
                    'avgSales' => [
                        'field' => 'dollar_sales',
                        "aggregate" => "function(rows, group, aggFieldIndex) {
                            return rows
                            .data()
                            .pluck(aggFieldIndex)
                            .reduce( function (a, b) {
                                return a + 1*b.replace(/[^\d\.]/g, '');
                            }, 0) / rows.count()}",
                        "format" => "function(value) {return value.toFixed(5);}",
                    ],
                    'countSales' => ['count', 'dollar_sales'],
                    'minSales' => ['min', 'dollar_sales'],
                    'maxSales' => ['max', 'dollar_sales'],
                ],
                "top" => "<td colspan='999'>{expandCollapseIcon} Top: Category: {productLine} | Total: {totalSales} | Avg: {avgSales} | Count: {countSales} | Min: {minSales} | max: {maxSales}</td>",
                // "bottom" => "<td colspan='999'>{expandCollapseIcon} Bottom: Line: {productLine} | Line sales: {totalSales}</td>",
            ],
        ],
        "clientRowSpan" => [
            'customerName' => [
                'direction' => 'desc',
            ],
            'productLine' => [
                'direction' => 'desc',
            ]
        ],
        "clientRowSpan" => ['customerName', 'productLine'],
        "options" => [
            "paging" => true,
            "searching" => true,
            "pageLength" => 25,
            // "order" => [[0, 'asc'], [1, 'asc']],
        ],
    ));
    ?>
</div>