<?php

use \koolreport\pivot\widgets\PivotTable;
use \koolreport\widgets\koolphp\Table;
use \koolreport\datagrid\DataTables;
?>
<style>
	tr[role="row"] td:first-child {
		padding-left: 4em !important;
	}
</style>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
		<h1>Excel Table Row Group</h1>
		<p class="lead">Exporting table with multi-level row groups</p>
		<form method="post">
			<button type="submit" class="btn btn-primary" formaction="export.php?type=excel">Download Excel</button>
			<button type="submit" class="btn btn-primary" formaction="export.php?type=bigspreadsheet">Download Big Spreadsheet</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			DataTables::create(array(
				"dataSource" => $this->dataStore('sales'),
				"columns" => array(
					"customerName" => ["visible" => false],
					"productLine" => ["visible" => false],
					"productName" => ["label" => "Product Name"],
					"dollar_sales" => array(
						"label" => "Sales",
						"type" => "number",
					)
				),
				"clientRowGroup" => [
					"customerName" => [
						'direction' => 'asc',
						'calculate' => [
							'totalSales' => [
								'sum',  //'sum', 'count', 'avg', 'min', 'max' 
								'dollar_sales'
							],
						],
						"top" => "<td colspan='999'>{expandCollapseIcon} Top: Customer: {customerName} | Total: {totalSales}</td>",
						"bottom" => "<td colspan='999'>{expandCollapseIcon} Bottom: Customer: {customerName} | Customer sales: {totalSales}</td>",
					],
					"productLine" => [
						'direction' => 'asc',
						'calculate' => [
							'totalSales' => [
								'sum', 'dollar_sales',
								"format" => "function(value) {return value.toFixed(0);}",
							],
						],
						"top" => "<td colspan='999'>{expandCollapseIcon} Top: Line: {productLine} | Total: {totalSales}</td>",
					],
				],
				"options" => [
					"paging" => true,
				]
			));
			?>
		</div>
	</div>
</div>