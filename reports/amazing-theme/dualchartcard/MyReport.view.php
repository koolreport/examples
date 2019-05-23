<?php
    use \koolreport\amazing\GaugeCard;
    $sale_by_months = array(
        array("month","amount"),
        array("Jan",5000),
        array("Feb",2000),
        array("Mar",4000),
        array("Apr",5000),
        array("May",7000),
        array("Jun",3000),
        array("Jul",1000),
        array("Aug",6000),
        array("Oct",4000),
        array("Nov",8000),
        array("Dec",7000),
    ); 
    $orders_by_months = array(
        array("month","number"),
        array("Jan",53),
        array("Feb",28),
        array("Mar",41),
        array("Apr",58),
        array("May",75),
        array("Jun",39),
        array("Jul",10),
        array("Aug",69),
        array("Oct",47),
        array("Nov",81),
        array("Dec",77),
    );
?>
<div class="report-content" style="padding:15px">
    <div class="text-center">
        <h1>DualChartCard</h1>
        <p class="lead">
            The example shows how to use DualChartCard of Amazing Theme
        </p>
    </div>
    
    <div class="row">
        <div class="col-md-3">
        <?php
        \koolreport\amazing\DualChartCard::create(array(
            "title"=>"SALE",
            "infoText"=>"December 2018",
            "value"=>7000,
            "baseValue"=>8000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "preset"=>"primary",
            "chart"=>array(
                "dataSource"=>$sale_by_months,
                "columns"=>array(
                    "month",
                    "amount"=>array(
                        "prefix"=>"$",
                    )
                )
            ),
            "secondChart"=>array(
                "dataSource"=>$orders_by_months,
                "columns"=>array(
                    "month",
                    "number"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollars"
            ),
        ));
        ?>
        </div>

        <div class="col-md-3">
        <?php
        \koolreport\amazing\DualChartCard::create(array(
            "title"=>"SALE",
            "infoText"=>"December 2018",
            "value"=>7000,
            "baseValue"=>8000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "preset"=>"success",
            "chart"=>array(
                "dataSource"=>$sale_by_months,
                "columns"=>array(
                    "month",
                    "amount"=>array(
                        "prefix"=>"$",
                    )
                )
            ),
            "secondChart"=>array(
                "dataSource"=>$orders_by_months,
                "columns"=>array(
                    "month",
                    "number"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollars"
            ),
        ));
        ?>
        </div>

        <div class="col-md-3">
        <?php
        \koolreport\amazing\DualChartCard::create(array(
            "title"=>"SALE",
            "infoText"=>"December 2018",
            "value"=>7000,
            "baseValue"=>8000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "preset"=>"warning",
            "chart"=>array(
                "dataSource"=>$sale_by_months,
                "columns"=>array(
                    "month",
                    "amount"=>array(
                        "prefix"=>"$",
                    )
                )
            ),
            "secondChart"=>array(
                "dataSource"=>$orders_by_months,
                "columns"=>array(
                    "month",
                    "number"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollars"
            ),
        ));
        ?>
        </div>

        <div class="col-md-3">
        <?php
        \koolreport\amazing\DualChartCard::create(array(
            "title"=>"SALE",
            "infoText"=>"December 2018",
            "value"=>7000,
            "baseValue"=>8000,
            "format"=>array(
                "value"=>array(
                    "prefix"=>"$"
                )
            ),
            "preset"=>"danger",
            "chart"=>array(
                "dataSource"=>$sale_by_months,
                "columns"=>array(
                    "month",
                    "amount"=>array(
                        "prefix"=>"$",
                    )
                )
            ),
            "secondChart"=>array(
                "dataSource"=>$orders_by_months,
                "columns"=>array(
                    "month",
                    "number"
                )
            ),
            "cssClass"=>array(
                "icon"=>"fa fa-dollars"
            ),
        ));
        ?>
        </div> 
    </div>
</div>