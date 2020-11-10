<?php
        use \koolreport\pivot\widgets\PivotMatrix;
?>

<div class="report-content">  
    <div class="text-center">
        <h1>Pivot data produced by PivotSQL process</h1>
        <p class="lead">PivotSQL works with large SQL datasets
        </p>
    </div>
    
    <form id='form1' class="form-inline" method="post">

        <?php
        PivotMatrix::create(array(
            "id" => "pivotMatrix1",
            'dataSource' => $this->dataStore('pivotData'),
            'waitingFields' => array(
                "productLine" => "label",
                "productName" => "label",
                "orderMonth" => "label",
                "dollar_sales - count" => "data",
            ),
            'paging' => array(
                'size' => 10,
                'maxDisplayedPages' => 5,
                'sizeSelect' => array(5, 10, 20, 50, 100)
            )
        ));
        ?>
    </form>
</div>