<?php

use \koolreport\pivot\widgets\PivotTable;
use \koolreport\inputs\DateRangePicker;
?>
<div class='report-content'>
    <div class="text-center">
        <h1>Sale Report</h1>
        <p class="lead">
            Summarize amount of sales and number of sales by three dimensions: customers, categories and products
        </p>
    </div>
    <form action="" method="post" class="">
        <div class="form-group mt-4 text-center ">
            <button type="submit" class="btn btn-primary " formaction='export.php'>Download PDF</button>
            <button type="submit" class="btn btn-primary " formaction='exportExcel.php'>Download Excel</button>
        </div>
        <div class="form-inline justify-content-center">

            <strong>Choose Start Date and End Date</strong>
            <div class="col-md-4 form-group  ">
                <?php
                DateRangePicker::create(array(
                    "name" => "dateRange",
                ));
                ?>
            </div>
            <div class="form-group ">
                <button class="btn btn-primary " id="submit">Submit</button>
            </div>
        </div>
    </form>
    <div style="margin-top :20px;">
        <?php
        $dataStore = $this->dataStore('sales');
        PivotTable::create(array(
            'dataStore' => $dataStore,
            'rowDimension' => 'row',
            'measures' => array(
                'dollar_sales - sum',
                'dollar_sales - count',
            ),
            'rowSort' => array(
                'dollar_sales - sum' => 'desc',
            ),
            'rowCollapseLevels' => array(1),
            'totalName' => 'All',
            'width' => '100%',
            'nameMap' => array(
                'dollar_sales - sum' => 'Sales (in USD)',
                'dollar_sales - count' => 'Number of Sales',
            ),
        ));
        ?>
    </div>

</div>