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
  <body style='margin: 1in'>
    <header>
        <div style="font-size:10px !important; color:#808080; padding-left:10px">
            <span>Header: </span>
            <span class="pageNumber"></span>
            <img src='http://www.chromium.org/_/rsrc/1438879449147/config/customLogo.gif?revision=3' />
        </div>
    </header>
    <footer>
        <div style="font-size:10px !important; color:#808080; padding-left:10px">
            <span>Footer: </span>
            {date}
            {title}
            {pageNumber}
            {totalPages}
            <img src='http://www.chromium.org/_/rsrc/1438879449147/config/customLogo.gif?revision=3' />
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
		google\BarChart::create(array(
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
