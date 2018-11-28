<?php
use \koolreport\datagrid\DataTables;
use \koolreport\morris_chart;
use \koolreport\sparklines;
use \koolreport\widgets\google;
use \koolreport\widgets\koolphp\Table;
?>


<div class="report-content">
    <div class="text-center">
        <h1>Map Process with State</h1>
        <p class="lead">
            Sum data rows' value with map's state.
        </p>
    </div>

    <?php
        $ds = $this->dataStore('salesProduct');
        Table::create(array(
            "dataSource" => $ds,
        ));
    ?>

    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <pre style="font-weight:bold"><code>
->pipe(new Map([
    '{value}' => function($row, $meta, $index, $mapState) {
        $numTopRows = 2;
        //If a row is among the first 2 rows
        if ($index < $numTopRows) {
            $mappedRows = [$row];
            //return it to send to next process or datastore
            return ['{rows}' => $mappedRows]; 
        }
        //Otherwise,
        //initialise a key of this Map's state to use for sum
        $sum = Util::init($mapState, 'sumOthers', []);
        foreach ($row as $columnName => $value) {
            Util::init($sum, $columnName, 0);
            //if column name = 'dollar_sales', sum it
            $sum[$columnName] = $columnName === 'dollar_sales' ? 
                $sum[$columnName] + $value : 'Other Customers';
        }
        //Save the sum to this Map's state
        $mapState['sumOthers'] = $sum;
        $mappedRows = [];
        //Skip rows after the first 2 rows (they won't be sent to next process or datastore) 
        //return this Map's state to save it
        return ['{rows}' => $mappedRows, '{state}' => $mapState];
        
    },
    '{end}' => function($count, $mapState) {
        //After all rows had been sent
        //retrieve this Map's state and send it at the end of Map process
        $rowsToSend = [$mapState['sumOthers']];
        return $rowsToSend;
    },
]))</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">

    <?php
    $ds = $this->dataStore('salesProductMap');
    Table::create(array(
        "dataSource" => $ds,
    ));
    ?>

    <?php
        google\BarChart::create(array(
            "dataStore" => $this->dataStore('salesProductMap'),
            "options" => array(
                'title' => 'Product Sales',
                'isStacked' => true,
            ),
            "width" => '100%',
            // 'height'=>'400px',
        ));
    ?>

</div>

