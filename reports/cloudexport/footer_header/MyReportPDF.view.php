<?php
    use \koolreport\widgets\google;
    use \koolreport\datagrid\DataTables;
?>
<style>
    @media  print {
      #table1 .break-row td {
        padding: 0 !important;
      }

      * {
        -webkit-print-color-adjust: exact !important;
      }

      #salesQuarterCustomer td	{
        // background-color: #b1dfbb !important;
      }

    }
</style>
<html>
	<head>
		<title>Customer Sales</title>
	</head>
  <body style='margin: 1in'>
    <header>
        <div style="font-size:10px !important; color:#808080; padding-left:10px; width:575px;">
			<span style='position: relative; top: 10px; float: right'>
				Title: <span class="title"></span> || 
				Page: <span class="pageNumber"></span> || 
				Total pages: <span class="totalPages"></span> || 
				Date: <span class="date"></span>
			</span>
            <span style=''>
				<img src='bar.png' height='20px' style='position:relative; top:5px'/>
				KoolReport 
			</span>
        </div>
    </header>
    <footer>
		<div style="font-size:10px !important; color:#808080; padding-left:10px; width:575px;">
			<span style='position: relative; top: 10px; float: right'>
				Title: {title} || 
				Page: {pageNumber} || 
				Total pages: {totalPages} || 
				Date: {date}
			</span>
            <span style=''>
				<img src='bar.png' height='20px' style='position:relative; top:5px'/>
				KoolReport 
			</span>
        </div>
    </footer> 
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
			"dataStore"=>$this->dataStore('salesQuarterCustomerNoAll'),
			"options"=>array(
			  'title' => 'Top 5 Customers\' Quarterly Sales',
			  'isStacked' => true,
			  'interpolateNulls' => true,
			),
			"width"=>'100%',
			// 'height'=>'400px',
		));
		google\PieChart::create(array(
			"dataStore"=>$this->dataStore('salesQuarterCustomerAll'),
			"options"=>array(
			  'title' => 'Top 5 Customers\' Yearly Sales',
			  // 'legend' => 'bottom',
			  // 'is3D' => true,
			),
			"width"=>'100%',
			// 'height'=>'300px',
		));
	?>
  </body>
</html>
