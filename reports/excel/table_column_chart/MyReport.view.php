<?php

use \koolreport\pivot\widgets\PivotTable;
use \koolreport\widgets\koolphp\Table;
use \koolreport\sparklines\Bar;
use \koolreport\sparklines\Box;
use \koolreport\sparklines\Bullet;
use \koolreport\sparklines\Line;
use \koolreport\sparklines\Pie;
use \koolreport\sparklines\Tristate;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
		<h1>Excel Exporting Charts in Table</h1>
		<p class="lead">Exporting table with chart column</p>
		<form method="post">
			<button type="submit" class="btn btn-primary" formaction="export.php?type=excel">Download Excel</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			Table::create(array(
				"dataSource" => $this->dataStore('salesQuarterProduct'),
				"columns" => array(
					"productName",
					"Q1",
					"Q2",
					"Q3",
					"Q4",
					"Chart" => [
						"formatValue" => function ($value, $row, $cKey) {
							return Pie::create(array(
								"data" => [
									$row['Q1'],
									$row['Q2'],
									$row['Q3'],
									$row['Q4']
								],
								"width" => "60px",
								"height" => "60px",
							));
						},
					],
				),
			));
			?>
		</div>
	</div>
</div>