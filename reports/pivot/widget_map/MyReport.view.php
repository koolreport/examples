<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\pivot\widgets\PivotMatrix;
?>

<div class="report-content">
    <div class="text-center">
        <h1>PivotTable's and PivotMatrix's Map</h1>
        <p class="lead">
            Mapping fields, headers and data cells
        </p>
    </div>

    <pre style="font-weight:bold"><code>
PivotTable::create(array(
    ...
    'map' => array(
        'dataField' => function($dataField, $fieldInfo) {
            $v = $dataField;
            if ($v === 'dollar_sales - sum')
                $v = 'Sales (in USD)';
            else if ($v === 'dollar_sales - count')
                $v = 'Number of Sales';
            else if ($v === 'dollar_sales - avg')
                $v = 'Sales Average';
            return $v;
        },
        'rowHeader' => function($rowHeader, $headerInfo) {
            return $rowHeader;
        },
        'columnHeader' => function($colHeader, $headerInfo) {
            return $colHeader;
        },
        'dataCell' => function($value, $cellInfo) {
            return $value;
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
                'dataField' => function($dataField, $fieldInfo) {
                    return $dataField;
                },
                'rowHeader' => function($rowHeader, $headerInfo) {
                    return $rowHeader;
                },
                'columnHeader' => function($colHeader, $headerInfo) {
                    return $colHeader;
                },
                'dataCell' => function($value, $cellInfo) {
                    return $value;
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
        'rowField' => function($rowField, $fieldInfo) {
            $v = $dataField;
            if ($v === 'customerName')
                $v = 'Customer';
            else if ($v === 'productLine')
                $v = 'Category';
            else if ($v === 'productName')
                $v = 'Product';
            return $v;
        },
        'columnField' => function($colField, $fieldInfo) {
            $v = $dataField;
            if ($v === 'orderYear')
                $v = 'Year';
            else if ($v === 'orderMonth')
                $v = 'Month';
            return $v;
        },
        'rowHeader' => function($rowHeader, $headerInfo) {
            return $rowHeader;
        },
        'columnHeader' => function($colHeader, $headerInfo) {
            return $colHeader;
        },
        'dataCell' => function($value, $cellInfo) {
            return $value;
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
                'rowField' => function($rowField, $fieldInfo) {
                    $v = $rowField;
                    if ($v === 'customerName')
                        $v = 'Customer';
                    else if ($v === 'productLine')
                        $v = 'Category';
                    else if ($v === 'productName')
                        $v = 'Product';
                    return $v;
                },
                'columnField' => function($colField, $fieldInfo) {
                    $v = $colField;
                    if ($v === 'orderYear')
                        $v = 'Year';
                    else if ($v === 'orderMonth')
                        $v = 'Month';
                    return $v;
                },
                'rowHeader' => function($rowHeader, $headerInfo) {
                    return $rowHeader;
                },
                'columnHeader' => function($colHeader, $headerInfo) {
                    return $colHeader;
                },
                'dataCell' => function($value, $cellInfo) {
                    return $value;
                },
            ),
            // 'showDataHeaders' => true,
        ));
    ?>
    </div>
</div>