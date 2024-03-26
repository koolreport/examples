In many case, data is stored in big CSV or spreadsheet files. The BigSpreadsheetDataSource in Excel package will help us to read data from those file and pipe their data into our processing chain.

```
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "big_excel"=>array(
                    "class"=>'\koolreport\excel\BigSpreadsheetDataSource',
                    "filePath"=>"/var/storage/big_sales.xlsx",
                ),
            )
        );
    }
```