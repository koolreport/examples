<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Column Align</h1>
        <p class="lead">Set column align or any css style</p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "columns"=>array(
            "name",
            "age"=>array(
                "cssStyle"=>"font-weight:bold"
            ),
            "income"=>array(
                "cssStyle"=>"text-align:right"
            )
        )
    ));
    ?>
</div>