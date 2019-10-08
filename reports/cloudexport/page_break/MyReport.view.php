<?php
use \koolreport\datagrid\DataTables;
use \koolreport\morris_chart;
use \koolreport\sparklines;
use \koolreport\widgets\google;
use \koolreport\widgets\koolphp\Table;
use \koolreport\core\Utility as Util;
?>
<form method="post">
	<div class="report-content">
		<div class="text-center">
			<h1>PDF Page Break</h1>
			<p class="lead">
				This examples show how add <code>page-break</code> to exported PDF.
			</p>
			<button type="submit" class="btn btn-primary" formaction="export.php?type=cloudPDF">
				Cloud PDF</button>
			<button type="submit" class="btn btn-primary" formaction="export.php?type=cloudJPG">
				Cloud JPG</button>
		</div>
		
		<?php
		$ds = $this->dataStore('salesQuarterCustomer');
		DataTables::create(array(
			'name' => 'salesQuarterCustomer',
			// "dataSource" => $data, 
			"dataSource" => $ds,
			// "columns" => ['customerName'],
			"options" => array(
				"searching" => true,
				"paging" => true,
				"colReorder" => true,
				// "ordering" => false,
				"order" => [],
				// "order" => [[0, 'desc']],
				// 'columnDefs' => array(
				//     array(
				//         'type' => 'customType',
				//         'targets' => 0, //target the first column
				//     )
				// )
			),
			// "columns"=>array(
			//     "customerName" => array(
			//         "label" => "Customer",
			//     ),
			//     "Q 1" => array(
			//         "footer" => "sum",
			//         "footerText"=>"<b>Total: @value</b>",
			//     )
			// ),
			"showFooter" => true,
			// "paging" => array(
			//   "pageSize" => 2
			// )
			"searchOnEnter" => true,
			"searchMode" => "OR",
		));
		
		google\LineChart::create(array(
			"dataStore" => $this->dataStore('salesQuarterCustomerNoAll'),
			"options" => array(
				'title' => 'Top 5 Customers\' Quarterly Sales',
				'isStacked' => true,
				// 'legend' => 'none',
				'pointShape' => 'circle',
				'pointSize' => 10,
				'hAxis' => [
					// 'textPosition' => 'none',
					'showTextEvery' => 4
				],
				'interpolateNulls' => true,
			),
			// 'columns' => array('customerName', 'Q 1'),
			"width" => '100%',
			// 'height'=>'400px',
		));
		
		google\PieChart::create(array(
			"dataStore" => $this->dataStore('salesQuarterCustomerAll'),
			"options" => array(
				'title' => 'Top 5 Customers\' Yearly Sales',
				// 'legend' => 'bottom',
				// 'is3D' => true,
				'chartArea' => array(
					// 'height' => '90%'
					
				),
				
			),
			"width" => '100%',
			// 'height'=>'600px',
		));
		?>
	</div>
</form>