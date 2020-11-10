<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        Using plugins with DataTables
        </p>
    </div>
    
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "plugins" => ["Buttons"],
        "options" => array(
            "dom" => 'Bfrtip',
            "buttons" => [
                "copy", "csv", "excel", "pdf", "print", "colvis"
            ],
        ),
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        ),
    ));
    ?>
</div>