<?php
    use \koolreport\widgets\google\ComboChart;
    use \koolreport\processes\AccumulativeColumn;
    use \koolreport\processes\Sort;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Pareto Chart</h1>
        <p class="lead">
            This example shows how to create Pareto Chart
        </p>
    </div>

    <div style="margin-bottom:50px;">
    <?php
    ComboChart::create(array(
        "title"=>"Sale Report",
        "dataSource"=>(
            $this->src('data')
            ->pipe(new Sort(array(
                "sale"=>"desc"
            )))
            ->pipe(new AccumulativeColumn(array(
                "running_sale"=>"sale"
            )))
        ),
        "columns"=>array(
            "category"=>array(
                "label"=>"Month",
                "type"=>"date",
                "format"=>"Y-m",
                "displayFormat"=>"F, Y"
            ),
            "sale"=>array(
                "label"=>"Sale",
                "type"=>"number",
                "prefix"=>"$",
            ),
            "running_sale"=>array(
                "label"=>"Total",
                "type"=>"number",
                "prefix"=>"$",
                "chartType"=>"line",
            ),
        ),
        "options"=>array(
            "vAxes"=>array(
                array("label"=>"Sale"),
                array("label"=>"Running Sale"),  
            ),
            "series"=>array(
                0=>array("targetAxisIndex"=>0), //"amount series"
                1=>array("targetAxisIndex"=>1), //"running_total"
            )
        )
    ));
    ?>
    </div>
</div>
