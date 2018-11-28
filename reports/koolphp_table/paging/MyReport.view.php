<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Paging</h1>
        <p class="lead">How to set paging in Table</p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('long_data'),
        "columns"=>array(
            "productName"=>array(
                "label"=>"Product Name"
            ),
            "productLine"=>array(
                "label"=>"Line"
            ),
            "quantityInStock"=>array(
                "label"=>"Qty In Stock"
            )
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        ),
        "paging"=>array(
            "pageSize"=>10,
            "pageIndex"=>0,
        ),
    ));
    ?>
</div>