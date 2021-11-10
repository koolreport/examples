<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to use count distinct in row groups
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
        "clientRowGroup" => [
            "customerName" => [
                'direction' => 'asc',
                'calculate' => [
                    'countDistinctLine' => [
                        'field' => 'productLine',
                        "aggregate" => "function(rows, group, aggFieldIndex) {
                            var initAgg = {
                                values: {},
                                count: 0
                            };
                            return rows
                            .data()
                            .pluck(aggFieldIndex)
                            .reduce( function (agg, b) {
                                if (agg.values[b] !== true) {
                                    agg.count += 1;
                                    agg.values[b] = true;
                                } 
                                return agg;
                            }, initAgg)}",
                        "format" => "function(agg) {return agg.count;}",
                    ],
                ],
                "top" => "<td colspan='999'>{expandCollapseIcon} Customer: \${customerName} | Count distinct categories: {countDistinctLine}</td>",
            ],
            "productLine" => [
                'direction' => 'desc',
                "top" => "<td colspan='999'>{expandCollapseIcon} Category: {productLine}</td>",
            ],
        ],
        "options" => [
            "paging" => true,
            "searching" => true,
            "pageLength" => 25,
        ],
    ));
    ?>
</div>