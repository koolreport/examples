<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables Searching</h1>
        <p class="lead">
        The example show how to turn on the searching feature of DataTables.
        </p>
    </div>
    
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "options"=>array(
            "searching"=>true
        )
    ));
    ?>
</div>