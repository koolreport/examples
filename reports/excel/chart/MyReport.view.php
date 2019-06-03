<?php
use \koolreport\widgets\google;
?>
<div class="report-content">
	<div style='text-align: center;margin-bottom:30px;'>
        <h1>Excel Exporting Template</h1>
        <p class="lead">Exporting chart with template</p>
		<form>
			<button type="submit" class="btn btn-primary" formaction="export.php">Download Excel</button>
		</form>
	</div>
	<div class='box-container'>
		<div>
			<?php
			google\BarChart::create(array(
				"dataSource" => $this->dataStore('salesQuarterCustomer'),
				"columns" =>[
					'customerName', "Q1", "Q2", "Q3", "Q4"
				]
			));
			?>
		</div>
		<br><br><br>
		<div>
			<?php
			google\LineChart::create(array(
				"dataSource" => $this->dataStore('salesQuarterProduct'),
				"columns" =>[
					'productName', "Q1", "Q2", "Q3", "Q4"
				]
			));
			?>
		</div>
	</div>
</div>
