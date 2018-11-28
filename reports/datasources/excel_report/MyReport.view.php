<?php
    use \koolreport\widgets\google\LineChart;
    use \koolreport\widgets\koolphp\Table;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Excel Report</h1>
        <p class="lead">The exampe show how to use Excel as DataSource</p>
    </div>
    <?php
    LineChart::create(array(
        "dataSource"=>$this->dataStore("data"),
        "columns"=>array("orderMonth","dollar_sales")
    ));
    ?>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore("data"),
        "columns"=>array("orderMonth","dollar_sales")
    ));
    ?>
</div>
