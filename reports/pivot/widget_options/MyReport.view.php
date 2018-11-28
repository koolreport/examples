<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\pivot\widgets\PivotMatrix;
?>

<div class="report-content">
    <div class="text-center">
        <h1>PivotTable's and PivotMatrix's multiple options</h1>
        <p class="lead">
            Options for hiding subtotal rows and columns, showing data headers,
            mapping fields, headers and data cells
        </p>
    </div>

    <pre style="font-weight:bold"><code>
PivotTable::create(array(
    ...
    'hideSubtotalRow' => true,
    'hideSubtotalColumn' => true,
    'showDataHeaders' => true,
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    
     <?php
        $dataStore = $this->dataStore('salesTable');
        PivotTable::create(array(
            "name" => "PivotTable1",
            "dataStore" => $dataStore,
            "rowDimension" => "row",
            "columnDimension" => "column",
            "measures"=>array(
                "dollar_sales - sum",
                'dollar_sales - count',
                // 'dollar_sales - avg',
            ),
            'rowSort' => array(
                'dollar_sales - sum' => 'desc',
            ),
            'columnSort' => array(
                'orderMonth' => function ($a, $b) {
                    return (int) $a < (int) $b;
                },
            ),
            'rowCollapseLevels' => array(0, 1),
            'columnCollapseLevels' => array(0),
            'width' => '100%',
            'hideSubtotalRow' => true,
            'hideSubtotalColumn' => true,
            'showDataHeaders' => true,
        ));
    ?>
    </div>

    <br><br>
    <pre style="font-weight:bold"><code>
PivotMatrix::create(array(
    ...
    'hideSubtotalRow' => true,
    'hideSubtotalColumn' => true,
    'showDataHeaders' => true,
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    
    <?php
        $dataStore = $this->dataStore('salesMatrix');
        PivotMatrix::create(array(
            "name" => "PivotMatrix1",
            "dataStore" => $dataStore,
            "rowDimension" => "row",
            "columnDimension" => "column",
            "measures"=>array(
                "dollar_sales - sum",
                'dollar_sales - count',
                // 'dollar_sales - avg',
            ),
            'rowSort' => array(
                'dollar_sales - sum' => 'desc',
            ),
            'columnSort' => array(
                'orderMonth' => function ($a, $b) {
                    return (int) $a < (int) $b;
                },
                // 'dollar_sales - sum' => 'desc',
                // 'orderYear' => 'desc',
            ),
            'width' => '100%',
            'paging' => array(
                'size' => 20
            ),
            'hideSubtotalRow' => true,
            'hideSubtotalColumn' => true,
            'showDataHeaders' => true,
        ));
    ?>
    </div>

</div>