<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Column Reorder</h1>
        <p class="lead">
        Showing how to let user reorder column by dragging the header 
        </p>
    </div>
    
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "options"=>array(
            "colReorder"=>true
        )
    ));
    ?>
</div>