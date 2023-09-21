<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
        <h1>CSV Footer</h1>
        <p class="lead">How to use footers and aggregates when exporting to CSV</p>
		<form method="post">
			<button type="submit" class="btn btn-primary" formaction="export.php">Export to CSV</button>
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
					// "orderDate",
					// "orderMonth",
					// "orderYear",
					// "orderQuarter",
					"dollar_sales" => [
						"footer" => "sum",
						"footerText" => "Total: @value"
					]
				),
				"showFooter" => true,
				"paging"=>array(
					"pageSize"=>5
				)
			));
			?>
		</div>
	</div>
</div>
