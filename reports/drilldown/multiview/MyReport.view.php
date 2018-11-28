<?php
    use \koolreport\drilldown\MultiView;
    use \koolreport\processes\CopyColumn;
    use \koolreport\processes\DateTimeFormat;
    use \koolreport\widgets\google\LineChart;
    use \koolreport\widgets\google\ColumnChart;
    use \koolreport\widgets\koolphp\Table;

?> 
<div class="report-content">
    <div class="text-center">
        <h1>Sale By Month</h1>
        <p class="lead">
        This example shows you how to setup a <code>DrillThrough</code> or <code>MultiView</code> report, viewing
        data in different kinds of charts.
        </p>
    </div>


    <?php
    MultiView::create(array(
        "name"=>"saleMultiView",
        "dataSource"=>$this->dataStore('sale'),
        "title"=>"Sale By Month",
        "views"=>array(
            array(
                "handler"=>"<i class='fa fa-line-chart'></i>",
                "widget"=>array(LineChart::class,array(
                    "columns"=>array(
                        "paymentDate"=>array(
                            "label"=>"Payment Time",
                            "type"=>"datetime",
                            "format"=>"Y-m",
                            "displayFormat"=>"M Y",
                        ),
                        "amount"=>array(
                            "prefix"=>'$',
                            "label"=>"Amount"
                        )                                
                    )
                ))
            ),
            array(
                "handler"=>"<i class='fa fa-bar-chart'></i>",
                "widget"=>array(ColumnChart::class,array(
                    "columns"=>array(
                        "paymentDate"=>array(
                            "label"=>"Payment Time",
                            "type"=>"datetime",
                            "format"=>"Y-m",
                            "displayFormat"=>"M Y",
                        ),
                        "amount"=>array(
                            "prefix"=>'$',
                            "label"=>"Amount"
                        )
                    )
                ))
            ),
            array(
                "handler"=>"<i class='fa fa-table'></i>",
                "widget"=>array(Table::class,array(
                    "columns"=>array(
                        "paymentDate"=>array(
                            "label"=>"Payment Time",
                            "type"=>"datetime",
                            "format"=>"Y-m",
                            "displayFormat"=>"M Y",
                        ),
                        "amount"=>array(
                            "prefix"=>'$',
                            "label"=>"Amount"
                        )
                    ),
                    "paging"=>array(
                        "pageSize"=>10,
                    )
                ))
            ),
        )
    ));
    ?> 
</div>