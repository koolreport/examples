<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Minimum Settings</h1>
        <p class="lead">Minimum settings to get KoolPHP Table working</p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data')
    ));
    ?>
</div>