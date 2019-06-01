<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\datagrid\DataTables;
    use \koolreport\sparklines;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Sparklines in DataTables</h1>
        <p class="lead">
            Displaying sparklines with DataTables' data
        </p>
    </div>
    <?php
    $ds = $this->dataStore('salesQuarterCustomer');
    DataTables::create(array(
        'name' => 'salesQuarterCustomer',
        "dataSource" => $ds,
        "options" => array(
            "searching" => true,
            "paging" => true,
            "colReorder" => true,
            // "ordering" => false,
            "order" => [],
        ),
        "columns"=>array(
            "customerName" => array(
                "label" => "Customer",
            ),
            'SparkBar' => [
                'formatValue' => function($val, $row) {
                    $data = [$row['Q 1'], $row['Q 2'], 
                        $row['Q 3'], $row['Q 4']];
                    return sparklines\Bar::create(array(
                        "data" => $data,
                    ));
                }
            ],
            'SparkLine' => [
                'formatValue' => function($val, $row) {
                    $data = [$row['Q 1'], $row['Q 2'], 
                        $row['Q 3'], $row['Q 4']];
                    return sparklines\Line::create(array(
                        "data" => $data,
                    ));
                }
            ],
            'SparkPie' => [
                'formatValue' => function($val, $row) {
                    $data = [$row['Q 1'], $row['Q 2'], 
                        $row['Q 3'], $row['Q 4']];
                    return sparklines\Pie::create(array(
                        "data" => $data,
                    ));
                }
            ],
            'SparkBox' => [
                'formatValue' => function($val, $row) {
                    $data = [$row['Q 1'], $row['Q 2'], 
                        $row['Q 3'], $row['Q 4']];
                    return sparklines\Box::create(array(
                        "data" => $data,
                    ));
                }
            ],
            'SparkBullet' => [
                'formatValue' => function($val, $row) {
                    $data = [$row['Q 1'], $row['Q 2'], 
                        $row['Q 3'], $row['Q 4']];
                    return sparklines\Bullet::create(array(
                        "data" => $data,
                    ));
                }
            ],
            'SparkTristate' => [
                'formatValue' => function($val, $row) {
                    $data = [$row['Q 1'], $row['Q 2'], 
                        $row['Q 3'], $row['Q 4']];
                    return sparklines\Tristate::create(array(
                        "data" => $data,
                    ));
                }
            ],
            
        ),
        "showFooter" => true,
        "themeBase"=>"bs4", // Optional option to work with Bootsrap 4
        // "paging" => array(
        //   "pageSize" => 2
        // )
    ));
    ?>
</div>