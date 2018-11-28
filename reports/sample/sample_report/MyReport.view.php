<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Sample</h1>
        <p class="lead">
            Short description of what sample shows
        </p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>array(
            array("name"=>"Tuan","age"=>36),
            array("name"=>"Dong","age"=>34)
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
</div>