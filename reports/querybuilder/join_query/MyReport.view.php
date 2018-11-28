<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Join Query</h1>
        <p class="lead">
            The example show how to create join query on several tables
        </p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("orders"),
        "paging"=>true
    ));
    ?>
</div>