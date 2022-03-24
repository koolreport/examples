<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
        <h1>CSV Exportable</h1>
        <p class="lead">How to export datastores to CSV files</p>
		<form method="post">
			<button type="submit" class="btn btn-primary" formaction="export.php">Export to CSV</button>
			<button type="submit" class="btn btn-primary" formaction="export.php?multiply=10">Large CSV (30 thousand rows)</button>
			<button type="submit" class="btn btn-primary" formaction="export.php?multiply=100">Huge CSV (300 thousand rows)</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			Table::create(array(
				"dataSource" => $this->dataStore('orders'),
				"columns"=>array(
					"customerName",
					"productName",
					"productLine",
					"orderDate",
					"orderMonth",
					"orderYear",
					"orderQuarter",
					"dollar_sales"
				),
				"paging"=>array(
					"pageSize"=>5
				)
			));
			?>
		</div>
	</div>
</div>
