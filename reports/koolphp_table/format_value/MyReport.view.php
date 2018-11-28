<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Format Value</h1>
        <p class="lead">How to set your own custom value format for a column</p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "columns"=>array(
            "name",
            "age",
            "income"=>array(
                "formatValue"=>function($value,$row)
                {
                    $color = $value>70000?"#718c00":"#e83e8c";
                    return "<span style='color:$color'>$".number_format($value)."</span>";
                }    
            )
            ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
</div>