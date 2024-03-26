<?php
use \koolreport\datagrid\DataTables;
use \koolreport\morris_chart;
use \koolreport\sparklines;
use \koolreport\widgets\google;
use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Columns Transpose</h1>
        <p class="lead">
            Transpose a table using first column as transposed column names
        </p>
    </div>

    <?php
        $ds = $this->dataStore('salesQuarterCustomer');
        Table::create(array(
            'name' => 'salesQuarterCustomer',
            // "dataSource" => $data, 
            "dataSource" => $ds,
            "options" => array(
                "searching" => true,
                "paging" => true,
                "colReorder" => true,
                "order" => [],
            ),
            "showFooter" => true,
        ));
    ?>

    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <pre style="font-weight:bold"><code>
->pipe(new Transpose2())
    </code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">

    <?php
    $ds = $this->dataStore('salesCustomerQuarter');
    Table::create(array(
        'name' => 'salesCustomerQuarter',
        // "dataSource" => $data, 
        "dataSource" => $ds,
        "options" => array(
            "searching" => true,
            "paging" => true,
            "colReorder" => true,
            "order" => [],
        ),
        "showFooter" => true,
    ));
    ?>

    <?php
        google\PieChart::create(array(
            "dataStore" => $this->dataStore('salesCustomerQuarterAll'),
            "options" => array(
                'title' => 'Top 5 Customers\' Yearly Sales',
                // 'legend' => 'bottom',
                // 'is3D' => true,
            ),
            "width" => '100%',
            // 'height'=>'300px',
        ));
    ?>
</div>