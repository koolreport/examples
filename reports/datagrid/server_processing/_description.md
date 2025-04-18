By default, DataTables retrieves all records from a data source and performs paging, sorting, searching on client-side. The good thing of this method is all data is available at client ready to show for customer. The drawback is that it does not work well with large dataset. We are talking about millions of data points. Imagine if we load all data to clients, the browser's performance will be downgrade and it is actually a waste since most of users will not view all data. 

To overcome this issue, we would like to introduce `"serverSide"` options for DataGrid in which data will not load all at beginning. Rather it will load page by page __on-demand__. Beside the paging, this serverSide feature also support sorting and searching.

__Code__

```
DataTables::create(array(
    ...
    "dataSource" => function() {
        return $this->src('employees')
        ->query('select * from salaries');
    },
    "serverSide"=>true,
    // "method"=>'post', //default method = 'get'
    ...
```