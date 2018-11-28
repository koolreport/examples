This example show you how to connect to PostgreSQL and make a report. By default, KoolReport uses PDO as the database connector, you only need to enter the settings to `connectionString` of datasource settings.

```
function settings()
{
    return array(
        "dataSources"=>array(
            "sakila_rental"=>array(
                "connectionString"=>"pgsql:host=localhost;port=5432;dbname=sakila;user=username;password=password",
            ),
        )
    ); 
}    
```

If in situation that your server does not support PDO for PostgreSQL, then you can use `PostgreSQLDataSource` instead

```
function settings()
{
    return array(
        "dataSources"=>array(
            "sakila_rental"=>array(
                'host' => 'localhost',
                'username' => 'username',
                'password' => 'password',
                'dbbase' => 'automaker',
                'class' => "\koolreport\datasources\PostgreSQLDataSource"  
            ),
         )
    ); 
}    
```


