<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Apc Cache</h1>
        <p class="lead">
            Use ApcCache to accelerate the response of your report
        </p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("employees"),
        "paging"=>true
    ));
    ?>
</div>