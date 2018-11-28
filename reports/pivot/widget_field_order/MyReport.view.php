<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\pivot\widgets\PivotMatrix;
?>

<div class="report-content">
    <div class="text-center">
        <h1>PivotTable's and PivotMatrix's Field Order</h1>
        <p class="lead">
            Adding order number to row and column headers
        </p>
    </div>

    <pre style="font-weight:bold"><code>
PivotTable::create(array(
    ...
    'map' => array(
        'rowHeader' => function($rowHeader, $headerInfo) {
            $v = $rowHeader;
            if (isset($headerInfo['childOrder']))
                $v = $headerInfo['childOrder'] . ". " . $v;
            return $v;
        },
        'columnHeader' => function($colHeader, $headerInfo) {
            $v = $colHeader;
            if (isset($headerInfo['childOrder']))
                $v = $headerInfo['childOrder'] . ". " . $v;

            return $v;
        },
    ),
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    
     <?php
        $dataStore = $this->dataStore('salesTable');
        PivotTable::create(array(
            "name" => "PivotTable2",
            "dataStore" => $dataStore,
            "rowDimension" => "row",
            "columnDimension" => "column",
            "measures"=>array(
                "dollar_sales - sum",
                'dollar_sales - count',
                'dollar_sales - avg',
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
            'map' => array(
                'rowHeader' => function($rowHeader, $headerInfo) {
                    $v = $rowHeader;
                    if (isset($headerInfo['childOrder']))
                        $v = $headerInfo['childOrder'] . ". " . $v;
                    return $v;
                },
                'columnHeader' => function($colHeader, $headerInfo) {
                    $v = $colHeader;
                    if ($headerInfo['fieldName'] === 'orderYear')
                        $v = 'Year-' . $v;
                    else if ($headerInfo['fieldName'] === 'orderQuarter')
                        $v = 'Quarter-' . $v;
                    if (isset($headerInfo['childOrder']))
                        $v = $headerInfo['childOrder'] . ". " . $v;
                    return $v;
                },
            ),
            // 'showDataHeaders' => true,
        ));
    ?>
    </div>

    <br><br>
    <pre style="font-weight:bold"><code>
PivotMatrix::create(array(
    ...
    'map' => array(
        'rowHeader' => function($rowHeader, $headerInfo) {
            $v = $rowHeader;
            if (isset($headerInfo['childOrder']))
                $v = $headerInfo['childOrder'] . ". " . $v;
            return $v;
        },
        'columnHeader' => function($colHeader, $headerInfo) {
            $v = $colHeader;
            if (isset($headerInfo['childOrder']))
                $v = $headerInfo['childOrder'] . ". " . $v;

            return $v;
        },
    ),
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    
    <?php
        $dataStore = $this->dataStore('salesMatrix');
        PivotMatrix::create(array(
            "name" => "PivotMatrix2",
            "dataStore" => $dataStore,
            "rowDimension" => "row",
            "columnDimension" => "column",
            "measures"=>array(
                "dollar_sales - sum",
                'dollar_sales - count',
                'dollar_sales - avg',
            ),
            'rowSort' => array(
                'dollar_sales - sum' => 'desc',
            ),
            'columnSort' => array(
                'orderMonth' => function ($a, $b) {
                    return (int) $a < (int) $b;
                },
            ),
            'width' => '100%',
            'paging' => array(
                'size' => 20
            ),
            'map' => array(
                'rowHeader' => function($rowHeader, $headerInfo) {
                    $v = $rowHeader;
                    if (isset($headerInfo['childOrder']))
                        $v = $headerInfo['childOrder'] . ". " . $v;
                    return $v;
                },
                'columnHeader' => function($colHeader, $headerInfo) {
                    $v = $colHeader;
                    if ($headerInfo['fieldName'] === 'orderYear')
                        $v = 'Year-' . $v;
                    else if ($headerInfo['fieldName'] === 'orderQuarter')
                        $v = 'Quarter-' . $v;
                    if (isset($headerInfo['childOrder']))
                        $v = $headerInfo['childOrder'] . ". " . $v;
                    return $v;
                },
            ),
            // 'showDataHeaders' => true,
        ));
    ?>
    </div>

</div>