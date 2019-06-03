<?php
//Step 1: Load KoolReport
require_once "../../../load.koolreport.php";

//Step 2: Creating Report class
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\inputs\Bindable;
    use \koolreport\inputs\POSTBinding;

    protected function defaultParamValues()
    {
        return array(
            "years"=>array(2003),
            "customerNames"=>array(),
            "productLines"=>array(),
        );
    }
    
    protected function bindParamsToInputs()
    {
        return array(
            "years",
            "customerNames",
            "productLines"
        );
    }

    protected function settings()
    {
        $config = include "../../../config.php";
        return array(
            "dataSources"=>$config
        );
    }
    protected function setup()
    {
        $query_params = array();
        if($this->params["years"]!=array())
        {
            $query_params[":years"] = $this->params["years"];
        }
        if($this->params["customerNames"]!=array())
        {
            $query_params[":customerNames"] = $this->params["customerNames"];
        }
        if($this->params["productLines"]!=array())
        {
            $query_params[":productLines"] = $this->params["productLines"];
        }

        $this->src('automaker')->query("
            select
                customerName,
                productLine,
                YEAR(orderDate) as year,
                sum(quantityOrdered*priceEach) as amount
            from orders
            join customers
            on
                customers.customerNumber = orders.customerNumber        
            join orderdetails
            on orders.orderNumber = orderdetails.orderNumber
            join products
            on products.productCode = orderdetails.productCode
            where 1=1
            ".(($this->params["years"]!=array())?"and YEAR(orderDate) in (:years)":"")."
            ".(($this->params["customerNames"]!=array())?"and customerName in (:customerNames)":"")."
            ".(($this->params["productLines"]!=array())?"and productLine in (:productLines)":"")."    
            GROUP BY year, productLine, customerName
        ")->params($query_params)
        ->pipe($this->dataStore("orders"));
    }
}