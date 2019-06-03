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
    'cssClass' => array(
        'waitingField' => function($field, $fieldInfo) {
            return 'wf-' . $field;
        },
        'dataField' => function($field, $fieldInfo) {
            return 'df-' . $field;
        },
        'columnField' => function($field, $fieldInfo) {
            return 'cf-' . $field;
        },
        'rowField' => function($field, $fieldInfo) {
            return 'rf-' . $field;
        },
        'columnHeader' => function($header, $headerInfo) {
            return 'ch-' . $header;
        },
        'rowHeader' => function($header, $headerInfo) {
            return 'rh-' . $header;
        },
        'dataCell' => function($value, $cellInfo) {
            return 'dc-' . $value;
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
            "dataSource" => $dataStore,
            'rowCollapseLevels' => array(0, 1),
            'columnCollapseLevels' => array(0),
            'cssClass' => array(
                'waitingField' => function($field, $fieldInfo) {
                    return 'wf-' . $field;
                },
                'dataField' => function($field, $fieldInfo) {
                    return 'df-' . $field;
                },
                'columnField' => function($field, $fieldInfo) {
                    return 'cf-' . $field;
                },
                'rowField' => function($field, $fieldInfo) {
                    return 'rf-' . $field;
                },
                'columnHeader' => function($header, $headerInfo) {
                    return 'ch-' . $header;
                },
                'rowHeader' => function($header, $headerInfo) {
                    return 'rh-' . $header;
                },
                'dataCell' => function($value, $cellInfo) {
                    return 'dc-' . $value;
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
    'cssClass' => array(
        'waitingField' => function($field, $fieldInfo) {
            return 'wf-' . $field;
        },
        'dataField' => function($field, $fieldInfo) {
            return 'df-' . $field;
        },
        'columnField' => function($field, $fieldInfo) {
            return 'cf-' . $field;
        },
        'rowField' => function($field, $fieldInfo) {
            return 'rf-' . $field;
        },
        'columnHeader' => function($header, $headerInfo) {
            return 'ch-' . $header;
        },
        'rowHeader' => function($header, $headerInfo) {
            return 'rh-' . $header;
        },
        'dataCell' => function($value, $cellInfo) {
            return 'dc-' . $value;
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
            "dataSource" => $dataStore,
            'paging' => array(
                'size' => 20
            ),
            'cssClass' => array(
                'waitingField' => function($field, $fieldInfo) {
                    return 'wf-' . $field;
                },
                'dataField' => function($field, $fieldInfo) {
                    return 'df-' . $field;
                },
                'columnField' => function($field, $fieldInfo) {
                    return 'cf-' . $field;
                },
                'rowField' => function($field, $fieldInfo) {
                    return 'rf-' . $field;
                },
                'columnHeader' => function($header, $headerInfo) {
                    return 'ch-' . $header;
                },
                'rowHeader' => function($header, $headerInfo) {
                    return 'rh-' . $header;
                },
                'dataCell' => function($value, $cellInfo) {
                    return 'dc-' . $value;
                },
            ),
        ));
    ?>
    </div>
</div>