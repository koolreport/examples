<?php
    use \koolreport\drilldown\DrillDown;
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
    DrillDown::create(array(
        "name"=>"saleDrillDown",
        "title"=>"Sale Report",
        "levels"=>array(
            array(
                "title"=>"All Years",
                "content"=>function($params,$scope)
                {
                    ColumnChart::create(array(
                        "dataSource"=>(
                            $this->src("automaker")->query("
                                SELECT YEAR(paymentDate) as year,sum(amount) as sale_amount 
                                FROM payments
                                GROUP BY year
                            ")
                        ),
                        "columns"=>array(
                            "year"=>array(
                                "type"=>"string",
                                "label"=>"Year",
                            ),
                            "sale_amount"=>array(
                                "label"=>"Sale Amount",
                                "prefix"=>"$",
                            )
                        ),
                        "clientEvents"=>array(
                            "itemSelect"=>"function(params){
                                saleDrillDown.next({year:params.selectedRow[0]});
                            }",
                        )
                    ));
                }
            ),
            array(
                "title"=>function($params,$scope)
                {
                    return "Year ".$params["year"];
                },
                "content"=>function($params,$scope)
                {
                    ColumnChart::create(array(
                        "dataSource"=>(
                            $this->src("automaker")->query("
                                SELECT MONTH(paymentDate) as month,sum(amount) as sale_amount 
                                FROM payments
                                WHERE YEAR(paymentDate)=:year
                                GROUP BY month
                            ")
                            ->params(array(
                                ":year"=>$params["year"]
                            ))
                        )
                        ,
                        "columns"=>array(
                            "month"=>array(
                                "type"=>"string",
                                "formatValue"=>function($value)
                                {
                                    return date('F', mktime(0, 0, 0, $value, 10));
                                }
                            ),
                            "sale_amount"=>array(
                                "label"=>"Sale Amount",
                                "prefix"=>"$",
                            )
                        ),
                        "clientEvents"=>array(
                            "itemSelect"=>"function(params){
                                saleDrillDown.next({month:params.selectedRow[0]});
                            }",
                        )
                    ));
                }        
            ),
            array(
                "title"=>function($params,$scope)
                {
                    return date('F', mktime(0, 0, 0, $params["month"], 10));
                },
                "content"=>function($params,$scope)
                {
                    ColumnChart::create(array(
                        "dataSource"=>(
                            $this->src("automaker")->query("
                                SELECT paymentDate, DAY(paymentDate) as day,sum(amount) as sale_amount 
                                FROM payments
                                WHERE 
                                    YEAR(paymentDate)=:year
                                    AND
                                    MONTH(paymentDate)=:month 
                                GROUP BY day
                            ")
                            ->params(array(
                                ":year"=>$params["year"],
                                ":month"=>$params["month"],
                            ))
                        ),
                        "columns"=>array(
                            "day"=>array(
                                "formatValue"=>function($value,$row){
                                    return date("F jS, Y",strtotime($row["paymentDate"]));
                                },
                            ),
                            "sale_amount"=>array(
                                "label"=>"Sale Amount",
                                "prefix"=>"$",
                            )
                        )
                    ));
                }                
            )
        ),
        "themeBase"=>"bs4",
    ));
    ?> 
</div>
