<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Remove Duplicate</h1>
        <p class="lead">How to set duplicate removal in Table</p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('long_data'),
        "columns"=>array(
            "productLine"=>array(
                "label"=>"Line"
            ),
            "productName"=>array(
                "label"=>"Product Name"
            ),
            "quantityInStock"=>array(
                "label"=>"Qty In Stock"
            )
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        ),
        "removeDuplicate"=>array("productLine")
    ));
    ?>
</div>