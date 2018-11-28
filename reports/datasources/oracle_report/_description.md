This example show you how to connect to OracleDataSource and make a report. By default, KoolReport uses PDO as the database connector, you only need to enter the settings to `connectionString` of datasource settings.

```
function settings()
{
    return array(
        "dataSources"=>array(
            "sakila_rental"=>array(
                "connectionString"=>"oci:dbname=127.0.0.1/orcl;charset=UTF8",
                "username"=>"username",
                "password"=>"password",
            ),
        )
    ); 
}    
```

If in situation that your server does not support PDO for OracleDataSource, then you can use `OracleDataSource` instead

```
function settings()
{
    return array(
        "dataSources"=>array(
            "sakila_rental"=>array(
                'connectionString' => 'localhost:1521/orcl',
                'username' => 'username',
                'password' => 'password',
                'class' => "\koolreport\datasources\OracleDataSource",
            ),
         )
    ); 
}    
```


