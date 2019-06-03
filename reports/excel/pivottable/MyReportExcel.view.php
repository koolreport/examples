<?php
    use \koolreport\excel\Table;
    use \koolreport\excel\PivotTable;
    use \koolreport\excel\BarChart;
    use \koolreport\excel\LineChart;

    $sheet1 = "Sales by Customer";
?>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="Excel,HTML,CSS,XML,JavaScript">
<meta name="creator" content="John Doe">
<meta name="subject" content="subject1">
<meta name="title" content="title1">
<meta name="category" content="category1">

<div sheet-name="<?php echo $sheet1; ?>">
    <?php
    $allStylesArray = [
        'font' => [
            'name' => 'Calibri', //'Verdana', 'Arial'
            'size' => 30,
            'bold' => false,
            'italic' => FALSE,
            'underline' => 'none', //'double', 'doubleAccounting', 'single', 'singleAccounting'
            'strikethrough' => FALSE,
            'superscript' => false,
            'subscript' => false,
            'color' => [
                'rgb' => '000000',
                'argb' => 'FF000000',
            ]
        ],
        'alignment' => [
            'horizontal' => 'general',//left, right, center, centerContinuous, justify, fill, distributed
            'vertical' => 'bottom',//top, center, justify, distributed
            'textRotation' => 0,
            'wrapText' => false,
            'shrinkToFit' => false,
            'indent' => 0,
            'readOrder' => 0,
        ],
        'borders' => [
            'top' => [
                'borderStyle' => 'none', //dashDot, dashDotDot, dashed, dotted, double, hair, medium, mediumDashDot, mediumDashDotDot, mediumDashed, slantDashDot, thick, thin
                'color' => [
                    'rgb' => '808080',
                    'argb' => 'FF808080',
                ]
            ],
            //left, right, bottom, diagonal, allBorders, outline, inside, vertical, horizontal
        ],
        'fill' => [
            'fillType' => 'none', //'solid', 'linear', 'path', 'darkDown', 'darkGray', 'darkGrid', 'darkHorizontal', 'darkTrellis', 'darkUp', 'darkVertical', 'gray0625', 'gray125', 'lightDown', 'lightGray', 'lightGrid', 'lightHorizontal', 'lightTrellis', 'lightUp', 'lightVertical', 'mediumGray'
            'rotation' => 90,
            'color' => [
                'rgb' => 'A0A0A0',
                'argb' => 'FFA0A0A0',
            ],
            'startColor' => [
                'rgb' => 'A0A0A0',
                'argb' => 'FFA0A0A0',
            ],
            'endColor' => [
                'argb' => 'FFFFFF',
                'argb' => 'FFFFFFFF',
            ],
        ],
    ];
    $styleArray = [
        'font' => [
            'italic' => true,
            'color' => [
                'rgb' => '808080',
            ]
        ],
    ];
    ?>
    <div>Sales PivotTable</div>
    <div>
        <?php
        PivotTable::create(array(
            "dataSource" => 'salesPivot',
            'hideSubTotalRows' => true,
            'hideSubTotalColumns' => true,
            'hideGrandTotalRow' => true,
            'hideGrandTotalColumn' => true,
            "showDataHeaders" => true,
            'map' => array(
                'rowField' => function($rowField, $fieldInfo) {
                    return $rowField;
                },
                'columnField' => function($colField, $fieldInfo) {
                    return $colField;
                },
                'dataField' => function($dataField, $fieldInfo) {
                    // Util::prettyPrint($fieldInfo);
                    $v = $dataField;
                    if ($v === 'dollar_sales - sum')
                        $v = 'Sales (in USD)';
                    else if ($v === 'dollar_sales - count')
                        $v = 'Number of Sales';
                    return $v;
                },
                'dataHeader' => function($dataField, $fieldInfo) {
                    // Util::prettyPrint($fieldInfo);
                    $v = $dataField;
                    if ($v === 'dollar_sales - sum')
                        $v = 'Sales (in USD)';
                    else if ($v === 'dollar_sales - count')
                        $v = 'Number of Sales';
                    return $v;
                },
                'waitingField' => function($waitingField, $fieldInfo) {
                    return $waitingField;
                },
                'rowHeader' => function($rowHeader, $headerInfo) {
                    // Util::prettyPrint($headerInfo);
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
                'dataCell' => function($value, $cellInfo) {
                    return $value;
                    // Util::prettyPrint($cellInfo);
                    $rfOrder = $cellInfo['row']['fieldOrder'];
                    $cfOrder = $cellInfo['column']['fieldOrder'];
                    $df = $cellInfo['fieldName'];
                    $dfOrder = $cellInfo['fieldOrder'];
                    // return "$rfOrder:$cfOrder:$df. $value";
                    return $cellInfo['formattedValue'];
                },
            ),
            'excelStyle' => array(
                'dataField' => function($dataFields) use ($styleArray) {
                    return $styleArray;
                },
                'dataHeader' => function($dataFields, $fieldInfo) use ($styleArray) {
                    return $styleArray;
                },
                'columnHeader' => function($header, $headerInfo) use ($styleArray) {
                    return $styleArray;
                },
                'rowHeader' => function($header, $headerInfo) use ($styleArray) {
                    return $styleArray;
                },
                'dataCell' => function($value, $cellInfo) use ($styleArray) {                    
                    return $styleArray;
                },
            )
        ));
        ?>
    </div>
    
</div>