<?php
    use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Footer Settings</h1>
        <p class="lead">Show footer and calculated aggregation</p>
    </div>
    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "showFooter"=>true,
        "columns"=>array(
            "name",
            "age",
            "income"=>array(
                "cssStyle"=>"text-align:right",
                "prefix"=>"$",
                "footer"=>"sum",
                "footerText"=>"<b>Total:</b> @value"
            )
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
    <div class="text-center">
        <h4>On Top</h4>
        <p class="lead">Show aggregated footer on top</p>
    </div>

    <?php
    Table::create(array(
        "dataSource"=>$this->dataStore('data'),
        "showFooter"=>"top",
        "columns"=>array(
            "name",
            "age",
            "income"=>array(
                "cssStyle"=>"text-align:right",
                "prefix"=>"$",
                "footer"=>"sum",
                "footerText"=>"<b>Total:</b> @value"
            )
        ),
        "cssClass"=>array(
            "table"=>"table-bordered table-striped table-hover"
        )
    ));
    ?>
</div>