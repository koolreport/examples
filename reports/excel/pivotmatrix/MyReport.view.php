<?php
use \koolreport\pivot\widgets\PivotMatrix;
?>
<form method="post">
	<div class="report-content">
		<div style='text-align: center;margin-bottom:30px;'>
			<h1>Excel Exporting Template</h1>
			<p class="lead">Exporting pivot matrix with template</p>
				<button type="submit" class="btn btn-primary" formaction="export.php">Download Excel</button>
				<input type="hidden" name="koolPivotUpdate" value="1" />
		</div>
		<div class='box-container'>
			<div>
				<?php
				PivotMatrix::create(array(
					"name" => "PivotMatrix1",
					"dataSource" => $this->dataStore('salesPivot'),
					"showDataHeaders" => true,
				));
				?>
			</div>
		</div>
	</div>
</form>
