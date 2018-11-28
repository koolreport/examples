<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>MemCache</h1>
        <p class="lead">
            Use MemCache to accelerate the response of your report
        </p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "paging"=>true
    ));
    ?>
</div>