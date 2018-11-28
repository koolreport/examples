<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google;
?>
<div class="report-content">

    <div class="text-center">
        <h1>Customers vs Categories Cube</h1>
        <p class="lead">
            Top 5 customers with sales by categories
        </p>
    </div>

<pre style="font-weight:bold"><code>->pipe(new SuperCube(array(
    "row" => "customerName",
    "column" => "productLine",
    "sum" => "dollar_sales"
)))</code></pre>    
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    <?php 
    Table::create(array(
        "dataStore" => $this->dataStore('salesCustomerProductLine'),
        'cssClass' => array(
            'table' => 'table-striped'
        )
    ));
    ?>
    <?php 
    google\BarChart::create(array(
        "dataStore"=>$this->dataStore('salesCustomerProductLineAll'),
        "options"=>array(
        'title' => 'Top 5 Customers\' Total Sales',
        'legend' => 'bottom',
            'isStacked' => true
        ),
        'width' => '100%%',
    ));
    ?>
    <?php 
    google\ColumnChart::create(array(
        "dataStore"=>$this->dataStore('salesCustomerProductLineNoAll'),
        "options"=>array(
            'title' => 'Top 5 Customers\' Sales by Categories',
        ),
        "width"=>'100%',
        // 'height'=>'300px',
    ));
    ?>
</div>