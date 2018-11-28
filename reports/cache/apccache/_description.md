This example show you how to implement `ApcCache` in your report. If your server is installed with __APC(Alternative PHP Cache)__, that's awesome. You can use APC to significantly improve your report's speed and responsiveness. It is pretty simple, below code is all your need to add to your report:

```
<?php

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\cache\ApcCache;

    function cacheSettings()
    {
        return array(
            "ttl"=>60,
        );
    }
    ...
}
```

The `"ttl"` is the Time To Live determine how many seconds the cache will be valid. Within the alive period, the report will not need to connect to your datasource or processing your data, it will retrieve datastore stored in cache to use.

This package is all about the speed and responsiveness of your reports. Let imagine your report need to pull large data from various sources to deliver the computed results. It takes time to load and process data. If many people go to your report at the same time, server may be overloaded.

`Cache` package will solve above problem. It will store the computed results temporarily in a period of time. If the report need to reload, results will be loaded from the cache, which results in lowering the load on your database and also the computation of your report. Utimately, it will increase the speed and responsiveness of your report.