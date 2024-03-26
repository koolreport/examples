<?php
use \koolreport\datagrid\DataTables;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
        <h1>Excel Row Detail Table</h1>
        <p class="lead">Exporting excel table with row detail table</p>
		<form method="post">
			<button type="submit" class="btn btn-primary" formaction="export.php?type=excel">Download Excel</button>
			<button type="submit" class="btn btn-primary" formaction="export.php?type=bigspreadsheet">Download Big Spreadsheet</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			DataTables::create(array(
				"name" => "rowDetailTable",
				"dataSource" => $this->dataStore('sales'),
				"columns"=>array(
					"customerName",
					"productLine",
					// "productName",
					// "dollar_sales"=>array(
					// 	"type"=>"number",
					// )
				),
				"rowDetailData" => function($row) {
					return $row["productName"] . " : " . $row["dollar_sales"];
				},
				"onReady" => "function() {
					rowDetailTable.on( 'draw', function () {
						KRrowDetailTable.expandAllRowDetails();
					} );
					KRrowDetailTable.expandAllRowDetails();
				}",
				"width" => "100%"
			));
			?>
		</div>
	</div>
</div>
