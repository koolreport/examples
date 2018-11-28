<?php
use \koolreport\widgets\koolphp\Table;
use \koolreport\widgets\google;
?>
<div class="report-content">

    <div class="text-center">
        <h1>Months vs Years Cube</h1>
        <p class="lead">
            Sales across months and year
        </p>
    </div>

<pre style="font-weight:bold"><code>->pipe(new SuperCube(array(
    "row" => "orderMonth",
    "column" => "orderYear",
    "sum" => "dollar_sales"
)))</code></pre>    
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <?php 
    Table::create(array(
        "dataStore" => $this->dataStore('salesYearMonth'),
        'cssClass' => array('table' => 'table-condensed')
    ));
    ?>

    <div class='row'>
        <div class="col-md-4">
            <?php 
            google\ColumnChart::create(array(
                "dataStore"=>$this->dataStore('salesYearNoAll'),
                "options"=>array(
                    'title' => 'Yearly Sales',
                    'isStacked' => true,
                    'legend' => 'bottom'
                ),
                'width' => '100%',
            ));
            ?>
        </div>
        <div class="col-md-8">
            <?php 
            google\AreaChart::create(array(
                "dataStore"=>$this->dataStore('salesYearMonthNoAll'),
                "options"=>array(
                    'title' => 'Monthly Sales by Years',
                ),
                "width"=>'100%',
                // 'height'=>'300px',
            ));
            ?>
        </div>
    </div>

</div>