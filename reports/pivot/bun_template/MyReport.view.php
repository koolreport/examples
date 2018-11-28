<?php
use \koolreport\pivot\widgets\PivotTable;
use \koolreport\pivot\widgets\PivotMatrix;
?>

<div class="report-content">
    <div class="text-center">
        <h1>PivotTable and PivotMatrix using Bun template</h1>
        <p class="lead">
            Bun template saves blank spaces when expanding rows in comparison to default template
        </p>
    </div>

    <pre style="font-weight:bold"><code>
PivotTable::create(array(
    ...
    'template' => 'PivotTable-Bun',
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
        <?php
            $dataStore = $this->dataStore('salesTable');
            PivotTable::create(array(
                "name" => "PivotTable1",
                'template' => 'PivotTable-Bun',
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
                    // 'dollar_sales - sum' => 'desc',
                    // 'orderYear' => 'desc',
                ),
                'rowCollapseLevels' => array(1),
                'columnCollapseLevels' => array(0),
                'width' => '100%',
            ));
        ?>
    </div>
    <br><br><br>
    <pre style="font-weight:bold"><code>
PivotMatrix::create(array(
    ...
    'template' => 'PivotMatrix-Bun',
    ...
));</code></pre>
    <i class="fa fa-arrow-down" style="font-size:24px;"></i>
    <div style="margin-top:20px;">
    
    <?php
        $dataStore = $this->dataStore('salesMatrix');
        PivotMatrix::create(array(
            "name" => "PivotMatrix1",
            'template' => 'PivotMatrix-Bun',
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
                // 'dollar_sales - sum' => 'desc',
                // 'orderYear' => 'desc',
            ),
            'width' => '100%',
            'paging' => array(
                'size' => 20
            )
        ));
    ?>
    </div>
</div>

