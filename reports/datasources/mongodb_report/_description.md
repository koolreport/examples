MongoDataSource helps you to connect to MongoDB to retrieve data. You need to install the MongoDB package.

```
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "mongo_purchase"=>array(
                    "class"=>'\koolreport\mongodb\MongoDataSource',
                    "connectionString"=>"mongo://johndoe:secret_password@localhost:65432",
                    "database"=>"sakila"
                ),
            )
        );
    }

    public function setup()
    {
        $this->src('mongo_purchase')
        ->query(array("colection"=>"cPurchases"))
        ->pipe(..)
        ->pipe(...)
        ...
        ->pipe($this->dataStore('mongo_purchases'));
    }
```

