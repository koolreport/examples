<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Header Settings</h1>
        <p class="lead">How to configure header of Table</p>
    </div>
    
    <h5 class="text-center">Off header display</h5>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "showHeader"=>false
    ));
    ?>
    <h5 class="text-center">Header Grouping</h5>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "headers"=>array(
            array(
                "Basic Information"=>array("colSpan"=>1),
                "Other Information"=>array("colSpan"=>2),
            )
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>

</div>