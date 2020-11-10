<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
        <h1>Excel Exporting Template</h1>
        <p class="lead">Exporting table with multi-level row groups</p>
		<form>
			<button type="submit" class="btn btn-primary" formaction="export.php">Download Excel</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			Table::create(array(
				"dataSource" => $this->dataStore('sales'),
				"columns"=>array(
					"customerName",
					"productName",
					"productLine",
					"dollar_sales"=>array(
						"type"=>"number",
					)
				),
				"paging"=>array(
					"pageSize"=>5
				)
			));
			?>
		</div>
	</div>
</div>
