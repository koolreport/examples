<?php
    use \koolreport\visualQuery\VisualQuery;
    use \koolreport\datagrid\DataTables;
?>
<form method="post">
    <div class="report-content">
        <div class="text-center">
            <h1>VisualQuery</h1>
            <p class="lead">
            The basic working of VisualQuery
            </p>
        </div>
        
        <?php
        
        \koolreport\visualquery\VisualQuery::create(array(
            "name" => "visualquery1",
            "themeBase" => "bs4",
            "schema" => "salesSchema",
            "defaultValue" => [
                "selectDistinct" => false,
                "selectTables" => [
                    "orders",
                    "orderdetails",
                    "products",
                ],
                "selectFields" => [
                    "products.productName",
                ],
                "filters" => [
                    "(",
                    [
                        "field" => "orders.orderDay", 
                        "operator" => ">", 
                        "value1" => "2001-01-01", 
                        "value2" => "", 
                        "logic" => "and",
                        "toggle" => true,
                    ],
                    [
                        "field" => "products.productCode", 
                        "operator" => "nbtw", 
                        "value1" => "2", 
                        "value2" => "998", 
                        "logic" => "or",
                        "toggle" => true,
                    ],
                    ["products.productName", "<>", "a", "", "or", "toggle" => false],
                    ["products.productName", "nin", "a,b,c", "", "or"],
                    ["products.productName", "ctn", "a", "", "or"],
                    ")",
                ],
                "groups" => [
                    [
                        "field" => "orderdetails.cost", 
                        "aggregate" => "sum", 
                        "toggle" => true
                    ]
                ],
                "havings" => [
                    "(",
                    [
                        "field" => "sum(orderdetails.cost)", 
                        "operator" => ">", 
                        "value1" => "10000", 
                        "value2" => "", 
                        "logic" => "and",
                        "toggle" => true,
                    ],
                    ["products.productName", "<>", "a", "", "or", "toggle" => false],
                    ")",
                ],
                "sorts" => [
                    [
                        "field" => "sum(orderdetails.cost)", 
                        "direction" => "desc", 
                        "toggle" => true
                    ],
                    ["products.productName", "desc", "toggle" => false]
                ],
                "limit" => [
                    "offset" => 5,
                    "limit" => 10,
                    "toggle" => false,
                ]
            ],
            "activeTab" => "filters",
        ));
        ?>

        <button type='submit' class='btn btn-light' >Submit</button> 

        <style>
            pre {
                overflow-x: auto;
                white-space: pre-wrap;
                white-space: -moz-pre-wrap;
                white-space: -pre-wrap;
                white-space: -o-pre-wrap;
                word-wrap: break-word;
            }
        </style>
        <div style="margin: 30px; width:800px">
            <b>Select query:</b>
            <pre style="width:800px"><?php echo $this->queryStr; ?></pre>
            <b>Query with parameters:</b>
            <pre style="width:800px"><?php echo $this->paramQuery; ?></pre>
            <b>Parameters:</b>
            <?php \koolreport\core\Utility::prettyPrint($this->sqlParams); ?>
        </div>

        <?php
            // print_r($this->dataStore('vqDS')->meta());
            DataTables::create(array(
                "name" => "charttable1",
                "dataSource" => $this->dataStore('vqDS'),
                // "columns" => ["Quantity", "Product Name"],
                "options" => [
                    "paging" => true
                ]
            ));
        ?>
    </div>
</form>