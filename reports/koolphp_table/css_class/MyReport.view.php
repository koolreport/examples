<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Css Class</h1>
        <p class="lead">How to set css class in Table</p>
    </div>

    <style>
        .cssHeader
        {
            background-color:#e9ffe8;
        }
        .cssItem
        {
            background-color:#fdffe8;
        }
    </style>

    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "cssClass"=>array(
            "th"=>"cssHeader",
            "tr"=>"cssItem"
        )
    ));
    ?>
</div>