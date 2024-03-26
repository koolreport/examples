ReportDataSource is a special data source which help to get data from another report. Let imagine we create a report that requires data already existed in another report. We want to connect to existed report and get those data rather than spending time to rewrite code. ReportDataSource will help you to do so.

```
    public function settings()
    {
        require "HardwareSaleReport.php";
        return array(
            "dataSources"=>array(
                "hardwareSaleReport"=>array(
                    "class"=>"/koolreport/datasources/ReportDataSource",
                    "report"=>"HardwareSaleReport",
                    "params"=>array("month"=>1,"year"=>2017)
                )
            )
        );
    }
    public function setup()
    {
        $this->src('hardwareSaleReport')
        ->dataStore('sale') //We want to get data from "sale" data store of HardwareSaleReport
        ...
        ->pipe(this->dataStore('sale_of_hardware'));
    }
```