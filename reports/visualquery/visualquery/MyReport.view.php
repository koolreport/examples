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
            "schema" => array(
                "tables" => [
                    "customers"=>array(
                        "{meta}" => [
                            "alias" => "Customers"
                        ],
                        "customerNumber"=>array(
                            "alias"=>"Customer Number",
                        ),
                        "customerName"=>array(
                            "alias"=>"Customer Name",
                        ),
                    ),
                    "orders"=>array(
                        "{meta}" => [
                            "alias" => "Orders"
                        ],
                        "orderNumber"=>array(
                            "alias"=>"Order Number"
                        ),
                        "orderDate"=>array(
                            "alias"=>"Order Date"
                        ),
                        "orderMonth" => [
                            "expression" => "month(orderDate)",
                        ]
                        // "customerNumber"=>array(
                        //    "alias"=>"Customer Number"
                        // )
                    ),
                    "orderdetails"=>array(
                        "{meta}" => [
                            "alias" => "Order Details"
                        ],
                        // "orderNumber"=>array(
                        //     "alias"=>"Order Number"
                        // ),
                        "quantityOrdered"=>array(
                            "alias"=>"Quantity",
                            "type"=>"number",
                        ),
                        "priceEach"=>array(
                            "alias"=>"Price Each",
                            "type"=>"number",
                            "decimal"=>2,
                            "prefix"=>"$",
                        ),
                        // "productCode"=>array(
                        //     "alias"=>"Product Code"
                        // ),
                        "cost" => [
                            // "expression" => "orderdetails.quantityOrdered * orderdetails.priceEach",
                            "expression" => "quantityOrdered * priceEach",
                            "alias"=>"Cost",
                            "type"=>"number",
                            "decimal"=>2,
                            "prefix"=>"$",
                        ]
                    ),
                    "products"=>array(
                        "{meta}" => [
                            "alias" => "Products"
                        ],
                        "productCode"=>array(
                            "alias"=>"Product Code"),
                        "productName"=>array(
                            "alias"=>"Product Name"),
                    )
                ],
                "relations" => [
                    ["orders.customerNumber", "leftjoin", "customers.customerNumber"],
                    ["orders.orderNumber", "join", "orderdetails.orderNumber"],
                    ["orderdetails.productCode", "leftjoin", "products.productCode"],
                ]
            ),
            "defaultValue" => [
                "selectTables" => [
                    "orders",
                    "orderdetails",
                    "products",
                ],
                "selectFields" => [
                    "products.productName",
                ],
                "filters" => [
                    ["products.productCode", "btw", "2", "998", "or"],
                    // ["products.productName", "nbtw", "1", "", "and"],
                    ["products.productName", "<>", "a", "", "or"],
                    ["products.productName", "nin", "a", "", "or"],
                    // ["products.productName", "null", "a", "", "or"],
                    // ["products.productName", "nnull", "a", "", "or"],
                    ["products.productName", "ctn", "a", "", "or"],
                    // ["products.productName", "nctn", "a", "", "or"],
                ],
                "groups" => [
                    ["orderdetails.cost", "sum"]
                ],
                "sorts" => [
                    ["products.productName", "desc"]
                ],
                "offset" => 5,
                "limit" => 10,
            ],
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
            <pre style="width:800px"><?php echo $this->queryStr; ?></pre>
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