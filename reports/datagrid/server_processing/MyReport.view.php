<?php
    use \koolreport\core\Utility as Util;
    use \koolreport\datagrid\DataTables;
?>
<style>
    .dataTables_paginate.paging_input {
        padding: 0 !important;
    }
    .dataTables_info,
    .dataTables_paginate.paging_input span,
    .dataTables_length label,
    .dataTables_filter label {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
    .dataTables_length label,
    .dataTables_filter label {
        margin: 0 20px !important;
    }
</style>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables' Server Processing</h1>
        <p class="lead">
            Displaying, paging and searching large datasets with server processing<br>
            "employees_salaries": approximate 2.8 million records
        </p>
    </div>

    <pre style="font-weight:bold"><code>
DataTables::create(array(
    ...
    "dataSource" => function() {
        return $this->src('employees')
        ->query('select * from employees_salaries');
    },
    "serverSide"=>true,
    // "method"=>'post', //default method = 'get'
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">

    <?php
    DataTables::create(array(
        'name' => 'DataTable1',
        'dataSource' => function() {
            return $this->src('employees')
            ->query('select * from salaries');
            // ->query("select concat(e.first_name, ' ', e.last_name) as emp_name,
            // s.* from salaries s left join employees e on s.emp_no = e.emp_no");
        },
        'scope' => $this->params,
        "options" => array(
            "searching" => true,
            "paging" => true,
            "colReorder" => true,
            "order" => [],
            "ordering" => false,
            "pageLength" => 25,
            "pagingType" => "input",
            "dom" => '<"top"ipfl<"clear">>rt<"bottom"ipfl<"clear">>'
            // "dom" => '<"top"iflp<"clear">>rt<"bottom"ip<"clear">>'
        ),
        // "columns"=>array(
        //     "customerName" => array("label" => "Customer"),
        //     "productLine" => array("label" => "Category"),
        //     "productName" => array("label" => "Product"),
        // ),
        "showFooter"=>true,
        "serverSide"=>true,
        // "method"=>'post', //default method = 'get'
    ));
    ?>
</div>