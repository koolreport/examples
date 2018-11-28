This example show you how to connect to SQL Server and make a report. By default, KoolReport uses PDO as the database connector, you only need to enter the settings to `connectionString` of datasource settings.

```
function settings()
{
    return array(
        "dataSources"=>array(
            "sakila_rental"=>array(
                "connectionString"=>"sqlsrv:server=localhost ; Database=sakila",
                "username"=>"username",
                "password"=>"password",
                "charset"=>"utf8"
            ),
        )
    ); 
}    
```

If in situation that your server does not support PDO for SQL Server, then you can use `SQLSRVDataSource` instead

```
function settings()
{
    return array(
        "dataSources"=>array(
            "sakila"=>array(
                'datahost' => 'localhost',
                'username' => 'username',
                'password' => 'password',
                'database' => 'sakila',
                'charset' => 'utf8',  
                'class' => "\koolreport\datasources\SQLSRVDataSource",
                'returnDatesAsStrings'=>true  
            ),
        )
    ); 
}    
```


