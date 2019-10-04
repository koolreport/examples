<?php
    use \koolreport\widgets\google;
    use \koolreport\widgets\koolphp\Table;
    // use \koolreport\datagrid\DataTables;
?>
<link rel="stylesheet" type="text/css" href="../../../assets/bs3/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/bs3/bootstrap-theme.min.css">
<style>
    @media  print {
      #table1 .break-row td {
        padding: 0 !important;
      }
    }
</style>
<html>
  <body style='margin: 1in'>
		<?php 
		  Table::create(array(
			"name" => 'table1',
			"dataStore" => $this->dataStore('salesQuarterCustomer'),
			"columns" => [
			  'customerName',
			  'Q 1'
			],
			"grouping" => [
				  "customerName" => [
					  "top" => "{customerName}",
				]
			  ],
		  ));
		?>

		<table id='tempTable' style='display:none'>
			<tr class='break-row'>
				<td colspan='999'>
				    <div></div><div class='break-before'></div>
				</td>
			</tr>
		</table>
          <script>
            KoolReport.load.onDone(function() {
              var breakRow = document.querySelector('#tempTable tr');
              var tbody = document.querySelector('#table1 tbody');
              var rows = document.querySelectorAll('#table1 tr.row-group');
              for (var i=1; i<rows.length; i+=1) {
                tbody.insertBefore(breakRow.cloneNode(true), rows[i]);
              }
            });
          </script>
			<div class='break-before'></div>
            <?php 
				
				google\BarChart::create(array(
					"dataStore"=>$this->dataStore('salesQuarterCustomerNoAll'),
					"options"=>array(
					  'title' => 'Top 5 Customers\' Quarterly Sales',
					  'isStacked' => true
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
