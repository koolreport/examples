<?php
use \koolreport\pivot\widgets\PivotTable;
?>
    <div class="report-content">
      <div class="text-center">
        <h1>Sale Report</h1>
        <p class="lead">
          The sale report by Years - Months - Customers - Categories
        </p>
      </div> 
      
        <?php
          $dataStore = $this->dataStore('sales');
          PivotTable::create(array(
            "dataStore"=>$dataStore,
            "rowDimension"=>"row",
            "columnDimension"=>"column",
            "measures"=>array(
              "dollar_sales - sum", 
              // 'dollar_sales - count',
            ),
            'rowSort' => array(
              'dollar_sales - count' => 'desc',
            ),
            'columnSort' => array(
              'orderMonth' => function($a, $b) {
                return (int)$a < (int)$b;
              },
            ),
            'rowCollapseLevels' => array(0),
            'columnCollapseLevels' => array(0),
            'width' => '100%',
            'nameMap' => array(
              'dollar_sales - sum' => 'Sales (in USD)',
              'dollar_sales - count' => 'Number of Sales',
              '1' => 'January',
              '2' => 'February',
              '3' => 'March',
              '4' => 'April',
              '5' => 'May',
              '6' => 'June',
              '7' => 'July',
              '8' => 'August',
              '9' => 'September',
              '10' => 'October',
              '11' => 'November',
              '12' => 'December',
            ),
          ));
        ?>
      
    </div>
