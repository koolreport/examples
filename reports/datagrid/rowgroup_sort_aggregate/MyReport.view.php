<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to sort row groups by aggregate
        </p>
    </div>
    <style>
        tr[role="row"] td:first-child {
            padding-left: 50px;
        }
    </style>
    <script>
        var groups0 = [];
        var groups1 = [];
        var groupAmount0 = {};
        var groupAmount1 = {};
        var groupOrder0 = {};
        var groupOrder1 = {};
    </script>
    <?php
    DataTables::create(array(
        "name" => "MyTable1",
        "dataSource"=>$this->dataStore("sales"),
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        ),
        "columns" => [
            "customerName", "productLine", "productName", 
            "dollar_sales" => [
                "type" => "num-fmt",
                "render" => "function(data, type, row, meta) {
                    // console.log(data);
                    var group0 = row[0];
                    var thisGroupOrder0 = groupOrder0[group0];
                    var group1 = row[0] + ' || ' + row[1];
                    var thisGroupOrder1 = groupOrder1[group1];
                    var sortData = thisGroupOrder0 * 10000000 + thisGroupOrder1 * 10000 + data * 1;
                    var renderData = (type !== 'sort' || thisGroupOrder0 === undefined || thisGroupOrder1 === undefined) ? 
                        '$' + $.fn.dataTable.render.number( '.', ',', 0, '' ).display(data) : sortData;
                    if (type == 'sort') {
                        console.log(row[0], row[1], row[2], thisGroupOrder0, thisGroupOrder1, ' : renderData = ', renderData);
                    }
                    return renderData;
                }"
            ],
        ],
        "clientRowGroup" => [
            "customerName" => [
                'direction' => 'asc',
                'calculate' => [
                    'totalSales' => [
                        "sum",  // sum, count, avg, min, max 
                        "dollar_sales",
                        "format" => "function(agg) {
                            var row0 = rows.data()[0];
                            var group0 = row0[0]; var group1 = row0[0] + ' || ' + row0[1];

                            if (level === 0) {
                                if (groups0.indexOf(group0) == -1) groups0.push(group0);
                                groupAmount0[group0] = agg; // save group amount of this customer group                                    
                                var amounts = [];
                                for (var p in groupAmount0) amounts.push([p, groupAmount0[p]]);
                                amounts.sort(function(a, b) { return a[1] - b[1]; });
                                amounts.forEach(function(amt, index) { groupOrder0[amt[0]] = index; });
                            }

                            if (level === 1) {
                                if (groups1.indexOf(group1) == -1) groups1.push(group1);
                                groupAmount1[group1] = agg; // save group amount of this customer group                                    
                                var amounts = [];
                                for (var p in groupAmount1) amounts.push([p, groupAmount1[p]]);
                                amounts.sort(function(a, b) { return a[1] - b[1]; });
                                amounts.forEach(function(amt, index) { groupOrder1[amt[0]] = index; });
                            }

                            return '$' + agg.toFixed(0);
                        }",
                    ],
                ],
                "top" => "<td colspan='999'>{expandCollapseIcon} Customer: {customerName} | Total: {totalSales}</td>",
            ],
            "productLine" => [
                'direction' => 'desc',
                'calculate' => [
                    'totalSales' => ['sum', 'dollar_sales',
                        "format" => "function(value) {return value.toFixed(0);}",
                    ],
                ],
                "top" => "<td colspan='999'>{expandCollapseIcon} Category: {productLine} | Total: \${totalSales}</td>",
            ],
        ],
        "options" => [
            "paging" => false,
            "searching" => false,
            "columnDefs" => [
                [
                    "targets" => 3,
                    "orderData" => 3,
                ],
            ],
        ],
    ));
    ?>
</div>