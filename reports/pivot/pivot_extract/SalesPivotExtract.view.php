<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\pivot\widgets\PivotTable;
?>
<div class="report-content">
  
  <div class="text-center">
    <h1>PDF Extract</h1>
    <p class="lead">
      The example shows how we can extract a table from multi-level tables of pivot.
      <br/>
      The extracted table can be used to draw chart or any other purposes.
    </p>
    <div class="form-group">
      <a href="export.php" class="btn btn-primary">Download PDF</a>
      <a href="exportExcel.php" class="btn btn-primary">Download Excel</a>
    </div>
  </div>

    <h3>Original Pivot Table</h3>  
    <?php 
        PivotTable::create(array(
            "dataStore"=>$this->dataStore('sales'),
            'rowCollapseLevels' => array(0),
            'columnCollapseLevels' => array(0),
        ));
    ?>

    <h3>Extracted Table 1</h3>
    <?php
        Table::create(array(
            "dataStore"=>$this->dataStore('salesTable1'),
        ));
    ?>

    <h3>Extracted Table 2</h3>
    <?php
        Table::create(array(
            "dataStore"=>$this->dataStore('salesTable2'),
        ));
    ?>
  
</div>