<?php
    \koolreport\widgets\google\GeoChart::create(array(
        "dataStore"=>function(){
            return $this->src('automaker')
            ->query("
                select customers.country,sum(orderdetails.quantityOrdered*orderdetails.priceEach) as amount 
                from orders
                join orderdetails on orderdetails.orderNumber = orders.orderNumber
                join customers on customers.customerNumber = orders.customerNumber
                group by customers.country
            ")
            ->pipe(new \koolreport\processes\CalculatedColumn(array(
                "tooltip"=>"'{country} : $'.number_format({amount})",
            )));
        },
        "columns"=>array(
            "country"=>array(
                "label"=>"Country"
            ),
            "amount"=>array(
                "label"=>"Sales",
                "type"=>"number",
                "prefix"=>"$"
            )
        ),
        "width"=>"100%",
        "options"=>array(
            "showTooltip"=> true,
            "showInfoWindow"=> true        
        )
    ));
?>