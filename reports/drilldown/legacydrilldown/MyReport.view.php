<?php
    use \koolreport\drilldown\LegacyDrillDown;
    use \koolreport\processes\CopyColumn;
    use \koolreport\processes\DateTimeFormat;
    use \koolreport\widgets\google\ColumnChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Sale By Time</h1>
        <p class="lead">
            This example shows how to setup a drill down report to see sale report
            by time.
            <br/>
            Please click on the column of chart to go further down on details.
        </p>
    </div>

    <?php
    LegacyDrillDown::create(array(
        "name"=>"saleDrillDown",
        "title"=>"Sale Report",
        "btnBack"=>true,
        "themeBase"=>"bs4",
        "dataSource"=>(
            $this->src('automaker')
            ->query("SELECT amount, paymentDate FROM payments")
            ->pipe(new CopyColumn(array(
                "year"=>"paymentDate",
                "month"=>"paymentDate",
                "day"=>"paymentDate",
            )))
            ->pipe(new DateTimeFormat(array(
                "year"=>"Y",
                "month"=>"m",
                "day"=>"d",
            )))
        ),
        "calculate"=>array(
            "sum"=>"amount"
        ),
        "levels"=>array(
            array(
                "groupBy"=>"year",
                "widget"=>array(ColumnChart::class,array(
                    "columns"=>array("year","amount"=>array(
                        "label"=>"Amount",
                        "prefix"=>'$'
                    )),
                    "colorScheme"=>array("#3b9b00"),
                )),
                "title"=>"All Years",
            ),
            array(
                "groupBy"=>"month",
                "widget"=>array(ColumnChart::class,array(
                    "columns"=>array("month","amount"=>array(
                        "label"=>"Amount",
                        "prefix"=>'$'
                    )),
                    "colorScheme"=>array("#af17b5"),
                )),
                "title"=>function($params)
                {
                    return "Year ".$params["year"];
                },
            ),
            array(
                "groupBy"=>"day",
                "widget"=>array(ColumnChart::class,array(
                    "columns"=>array("day","amount"=>array(
                        "label"=>"Amount",
                        "prefix"=>'$'
                    )),
                    "colorScheme"=>array("#e0dc00"),
                )),
                "title"=>function($params)
                {
                    return date('F', mktime(0, 0, 0, $params["month"], 10));
                },
            ),
        ),
    ));
    ?> 
</div>
