<div class="report-content">

    <div class="text-center">
        <h1>MongoDB</h1>
        <p class="lead">This report show how to build report from MongoDB datasource</p>
    </div>

    <div style="margin-left: auto; margin-right: auto; width: 50%;">
        <?php
        \koolreport\chartjs\LineChart::create(array(
            "dataStore"=>$this->dataStore('sale_by_month'),  
            "columns"=>array(
                "payment_date"=>array(
                    "label"=>"Month",
                    "type"=>"datetime",
                    "format"=>"Y-n",
                    "displayFormat"=>"F, Y",
                ),
                "amount"=>array(
                    "label"=>"Amount",
                    "type"=>"number",
                    "prefix"=>"$",
                )
            ),
            "width"=>"100%",
        ));
        ?>
    </div>
    
</div>