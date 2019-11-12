<?php
return array(
    "automaker"=>array(
        "connectionString"=>"mysql:host=sampledb.koolreport.com;dbname=automaker",
        "username"=>"expusr",
        "password"=>"koolreport sampledb",
        "charset"=>"utf8"
    ),
    "sakila"=>array(
        "connectionString"=>"mysql:host=sampledb.koolreport.com;dbname=sakila",
        "username"=>"expusr",
        "password"=>"koolreport sampledb",
        "charset"=>"utf8"
    ),
    "world"=>array(
        "connectionString"=>"mysql:host=sampledb.koolreport.com;dbname=world",
        "username"=>"expusr",
        "password"=>"koolreport sampledb",
        "charset"=>"utf8"
    ),  
    "employees"=>array(
        "connectionString"=>"mysql:host=sampledb.koolreport.com;dbname=employees",
        "username"=>"expusr",
        "password"=>"koolreport sampledb",
        "charset"=>"utf8"
    ),  
    "salesCSV"=>array(
        'filePath' => '../../../databases/customer_product_dollarsales2.csv',
        'class' => "\koolreport\datasources\CSVDataSource",      
        'fieldSeparator' => ';',
    )       
);