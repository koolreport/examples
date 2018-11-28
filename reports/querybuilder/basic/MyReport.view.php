<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>QueryBuilder</h1>
        <p class="lead">
            The example show how QueryBuilder will help you to build fast, error-free SQL statement
        </p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "paging"=>true
    ));
    ?>
</div>