<?php
use \koolreport\pivot\widgets\PivotTable;
?>
<div class='report-content'>
  <div class="text-center">
    <h1>Sale Report</h1>
    <p class="lead">
      Summarize amount of sales and number of sales by three dimensions: customers, categories and products
    </p>
  </div>
  <div>
    <?php
      $dataStore = $this->dataStore('sales');
      PivotTable::create(array(
        'dataStore'=>$dataStore,
        'rowDimension'=>'row',
        'measures'=>array(
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
