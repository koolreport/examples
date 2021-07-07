<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\visualquery\Bindable;

    public function defineSchemas()
    {
        return [
            "salesSchema" => array(
                "tables" => [
                    "customers"=>array(
                        "{meta}" => [
                            "alias" => "Table Customers"
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
                            "alias" => "Table Orders"
                        ],
                        "orderNumber"=>array(
                            "alias"=>"Order Number"
                        ),
                        "orderDay" => array(
                            "alias" => "Order Day",
                            "expression" => "date(orderDate)",
                            "type" => "date",
                        ),
                        "orderDate"=>array(
                            "alias"=>"Order Date",
                            "type" => "datetime"
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
                            "alias" => "Table Products"
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
            "separator" => ".",
        ];
    }

    public function settings()
    {
        //Get default connection from config.php
        $config = include "../../../config.php";

        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );
    }   
    protected function setup()
    {
        // echo "post="; \koolreport\core\Utility::prettyPrint($_POST);

        $params = \koolreport\core\Utility::get($this->queryParams, 'visualquery1');
        $qb = $this->paramsToQueryBuilder($params);
        $this->queryStr = $params ? $qb->toMySQL() : "select * from customers where 1=0";
        $this->paramQuery = $params ? $qb->toMySQL(['useSQLParams' => "name"]) : "select * from customers where 1=0";
        $this->sqlParams = $qb->getSQLParams();

        $this
        ->src('automaker')
        ->query($this->paramQuery)
        ->params($this->sqlParams)
        ->pipe(new \koolreport\processes\ColumnMeta([
            "Order Number" => [
                "type" => "string"
            ],
            "orderMonth" => [
                "type" => "string"
            ],
        ]))
        ->pipe($this->dataStore('vqDS'));
    } 

}