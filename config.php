<?php
return array(
    "automaker"=>array(
        "connectionString"=>"mysql:host=localhost;dbname=automaker",
        "username"=>"root",
        "password"=>"",
        "charset"=>"utf8"
    ),
    "sakila"=>array(
        "connectionString"=>"mysql:host=localhost;dbname=sakila",
        "username"=>"root",
        "password"=>"",
        "charset"=>"utf8"
    ),
    "world"=>array(
        "connectionString"=>"mysql:host=localhost;dbname=world",
        "username"=>"root",
        "password"=>"",
        "charset"=>"utf8"
    ),  
    "employees"=>array(
        "connectionString"=>"mysql:host=localhost;dbname=employees",
        "username"=>"root",
        "password"=>"",
        "charset"=>"utf8"
    ),  
    "salesCSV"=>array(
        'filePath' => '../../../databases/customer_product_dollarsales2.csv',
        'class' => "\koolreport\datasources\CSVDataSource",      
        'fieldSeparator' => ';',
    )       
);