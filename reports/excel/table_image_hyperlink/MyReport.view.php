<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\widgets\koolphp\Table;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
        <h1>Excel Exporting Image and Hyperlink Columns</h1>
        <p class="lead">Exporting excel table with image and hyperlink columns</p>
		<form method="post">
			<button type="submit" class="btn btn-primary" formaction="export.php?type=excel">Download Excel</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			Table::create(array(
				"dataSource" => $this->dataStore('orders'),
				"columns"=>array(
					"productName",
					"dollar_sales"=>array(
						"type"=>"number",
					),
					'image' => [
						'formatValue' => function($value, $row, $ckey) {
							return '<img src="../../../assets/images/bar.png" height="40px" />';
						},
					],
					'url' => [
						'formatValue' => function ($value, $row, $ckey) {
							return '<a href="https://www.example.com">Example site</a>';
						},
					]
				),
				"paging"=>array(
					"pageSize"=>5
				)
			));
			?>
		</div>
	</div>
</div>
