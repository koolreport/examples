<?php
    use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
    <div class="text-center">
        <h1>DataTables</h1>
        <p class="lead">
        How to use complex headers in DataTables
        </p>
    </div>
    
    <?php
    DataTables::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "complexHeaders" => true,
        "headerSeparator" => "-",
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        "cssClass"=>array(
            "table"=>"table table-striped table-bordered"
        )
    ));
    ?>
</div>