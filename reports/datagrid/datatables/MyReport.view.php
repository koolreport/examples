<?php

use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
            The minimum settings to get DataTables working
        </p>
    </div>

    <?php
    // $data = array_slice($this->dataStore("sales")->data(), 0, 20);
    // echo "<pre>" . var_export($data) . "</pre>";
    // $data = array(
    //     array('employeeNumber' => '1002', 'firstName' => 'Diane', 'lastName' => 'Murphy', 'jobTitle' => 'President', 'extension' => 'x5800'), 
    //     array('employeeNumber' => '1056', 'firstName' => 'Mary', 'lastName' => 'Patterson', 'jobTitle' => 'VP Sales', 'extension' => 'x4611'), 
    //     array('employeeNumber' => '1076', 'firstName' => 'Jeff', 'lastName' => 'Firrelli', 'jobTitle' => 'VP Marketing', 'extension' => 'x9273'), 
    //     array('employeeNumber' => '1088', 'firstName' => 'William', 'lastName' => 'Patterson', 'jobTitle' => 'Sales Manager (APAC)', 'extension' => 'x4871'), 
    //     array('employeeNumber' => '1102', 'firstName' => 'Gerard', 'lastName' => 'Bondur', 'jobTitle' => 'Sale Manager (EMEA)', 'extension' => 'x5408'), 
    //     array('employeeNumber' => '1143', 'firstName' => 'Anthony', 'lastName' => 'Bow', 'jobTitle' => 'Sales Manager (NA)', 'extension' => 'x5428'), 
    //     array('employeeNumber' => '1165', 'firstName' => 'Leslie', 'lastName' => 'Jennings', 'jobTitle' => 'Sales Rep', 'extension' => 'x3291'), 
    //     array('employeeNumber' => '1166', 'firstName' => 'Leslie', 'lastName' => 'Thompson', 'jobTitle' => 'Sales Rep', 'extension' => 'x4065'), 
    //     array('employeeNumber' => '1188', 'firstName' => 'Julie', 'lastName' => 'Firrelli', 'jobTitle' => 'Sales Rep', 'extension' => 'x2173'), 
    //     array('employeeNumber' => '1216', 'firstName' => 'Steve', 'lastName' => 'Patterson', 'jobTitle' => 'Sales Rep', 'extension' => 'x4334'), 
    //     array('employeeNumber' => '1286', 'firstName' => 'Foon Yue', 'lastName' => 'Tseng', 'jobTitle' => 'Sales Rep', 'extension' => 'x2248'), 
    //     array('employeeNumber' => '1323', 'firstName' => 'George', 'lastName' => 'Vanauf', 'jobTitle' => 'Sales Rep', 'extension' => 'x4102'), 
    //     array('employeeNumber' => '1337', 'firstName' => 'Loui', 'lastName' => 'Bondur', 'jobTitle' => 'Sales Rep', 'extension' => 'x6493'), 
    //     array('employeeNumber' => '1370', 'firstName' => 'Gerard', 'lastName' => 'Hernandez', 'jobTitle' => 'Sales Rep', 'extension' => 'x2028'), 
    //     array('employeeNumber' => '1401', 'firstName' => 'Pamela', 'lastName' => 'Castillo', 'jobTitle' => 'Sales Rep', 'extension' => 'x2759'), 
    //     array('employeeNumber' => '1501', 'firstName' => 'Larry', 'lastName' => 'Bott', 'jobTitle' => 'Sales Rep', 'extension' => 'x2311'), 
    //     array('employeeNumber' => '1504', 'firstName' => 'Barry', 'lastName' => 'Jones', 'jobTitle' => 'Sales Rep', 'extension' => 'x102'), 
    //     array('employeeNumber' => '1611', 'firstName' => 'Andy', 'lastName' => 'Fixter', 'jobTitle' => 'Sales Rep', 'extension' => 'x101'), 
    //     array('employeeNumber' => '1612', 'firstName' => 'Peter', 'lastName' => 'Marsh', 'jobTitle' => 'Sales Rep', 'extension' => 'x102'), 
    //     array('employeeNumber' => '1619', 'firstName' => 'Tom', 'lastName' => 'King', 'jobTitle' => 'Sales Rep', 'extension' => 'x103')
    // );
    // $data2 = array(
    //     array('customerName' => 'Online Diecast Creations Co.', 'productName' => '1917 Grand Touring Sedan', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-06 00:00:00', 'orderDay' => '6', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '4080'),
    //     array('customerName' => 'Online Diecast Creations Co.', 'productName' => '1911 Ford Town Car', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-06 00:00:00', 'orderDay' => '6', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '2754.5'),
    //     array('customerName' => 'Online Diecast Creations Co.', 'productName' => '1932 Alfa Romeo 8C2300 Spider Sport', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-06 00:00:00', 'orderDay' => '6', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '1660.12'),
    //     array('customerName' => 'Online Diecast Creations Co.', 'productName' => '1936 Mercedes Benz 500k Roadster', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-06 00:00:00', 'orderDay' => '6', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '1729.21'),
    //     array('customerName' => 'Blauer See Auto, Co.', 'productName' => '1932 Model A Ford J-Coupe', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-09 00:00:00', 'orderDay' => '9', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '2701.5'),
    //     array('customerName' => 'Blauer See Auto, Co.', 'productName' => '1928 Mercedes-Benz SSK', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-09 00:00:00', 'orderDay' => '9', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '4343.56'),
    //     array('customerName' => 'Blauer See Auto, Co.', 'productName' => '1939 Chevrolet Deluxe Coupe', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-09 00:00:00', 'orderDay' => '9', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '1463.8500000000001'),
    //     array('customerName' => 'Blauer See Auto, Co.', 'productName' => '1938 Cadillac V-16 Presidential Limousine', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-09 00:00:00', 'orderDay' => '9', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '2040.1000000000001'),
    //     array('customerName' => 'Vitachrome Inc.', 'productName' => '1937 Lincoln Berline', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-10 00:00:00', 'orderDay' => '10', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '3726.45'),
    //     array('customerName' => 'Vitachrome Inc.', 'productName' => '1936 Mercedes-Benz 500K Special Roadster', 'productLine' => 'Vintage Cars', 'orderDate' => '2003-01-10 00:00:00', 'orderDay' => '10', 'orderMonth' => '1', 'orderYear' => '2003', 'orderQuarter' => '1', 'dollar_sales' => '1768.3300000000002')
    // );
    DataTables::create(array(
        "dataSource" => $this->dataStore("employees"),
        "themeBase" => "bs4", // Optional option to work with Bootsrap 4
        "cssClass" => array(
            "table" => "table table-striped table-bordered"
        )
    ));
    ?>
</div>